<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include "./inc/config.inc";

error_reporting (E_ALL ^ E_NOTICE);
//header("Content-Type: text/html; charset=utf-8");

$post = (!empty($_POST)) ? true : false;

if ($post) {

  $type = stripslashes($_POST["type"]);

  // personal data
  $gender = stripslashes($_POST["gender"]);
  $degree = stripslashes($_POST["degree"]);
  $firstname = stripslashes($_POST["firstname"]);
  $lastname = stripslashes($_POST["lastname"]);
  $email = stripslashes($_POST["email"]);
  $phone = stripslashes($_POST["phone"]);

  // affiliation data
  $affiliation = stripslashes($_POST["affiliation"]);
  $street = stripslashes($_POST["street"]);
  $nr = stripslashes($_POST["nr"]);
  $city = stripslashes($_POST["city"]);
  $zipcode = stripslashes($_POST["zipcode"]);
  $country = stripslashes($_POST["country"]);

  // presentation data
  $presentation = stripslashes($_POST["presentation"]);
  $title = stripslashes($_POST["title"]);

  // agreement
  $agreement = stripslashes($_POST["agreement"]);

  $error = "";

  // check required fields
  if (!$email || !$firstname || !$lastname || !$email || !$affiliation || !$street || !$nr || !$city || !$zipcode || !$country) {
    $error .= REQUIRED;
  }
  // check optionally required fields
  if (!$error && ($type != "exhibitor") && ($presentation != "None") && !$title) {
    $error .= REQUIRED;
  }
  // check email and phone format
  if (!$error && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error .= INVALID_EMAIL;
  }
  if (!$error && $phone && !preg_match("/^\+[0-9]*$/",$phone)) {
    $error .= INVALID_PHONE;
  }

  // check agreement
  if (!$error && !$agreement) {
    $error .= AGREEMENT;
  }

  // check type of registration
  if (($type != "regular-1") && ($type != "regular-2") && ($type != "regular-3") && ($type != "regular-4") && ($type != "regular-5") && ($type != "student") && ($type != "exhibitor")) {
    $error .= INVALID_TYPE;
  }

  if (!$error) {
    if (isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"])) {
      $captcha = $_POST["g-recaptcha-response"];
      $secret = "6LcmvRMUAAAAAN2JJUTtODTQ9I1gOpTu09j6tsbl";
      $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha);
      $responseData = json_decode($verifyResponse);
      if(!$responseData->success) {
        $error .= CAPTCHA_FAILED;
      }
    }
    else {
      $error .= CAPTCHA_NOT_PRESENT;
    }
  }

  // create connection
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  // check connection
  if (!$conn) {
    $error .= "Connection failed: " . mysqli_connect_error();
  }
  else {
    mysqli_set_charset($conn, "utf8");
  }

  // check if email already exists
  if (!$error) {
    $sql = "SELECT id, firstname, lastname FROM Participant WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $error .= EMAIL_ALREADY_REGISTERED;
    }
  }

  if (!$error) {

    // is early registration?
    $early = ("20170601" > date("Ymd"));

    $amount = 0;
    if ($type == "regular-5") {
      $amount= ($early ? 350 : 400);
    }
    else if (($type == "regular-1") || ($type == "regular-2") || ($type == "regular-3") || ($type == "regular-4")) {
      $nrOfDays = intval(substr($type, -1));
      $amount= $nrOfDays * ($early ? 70 : 100);
    }
    else if ($type == "student") {
      $amount= ($early ? 170 : 200);
    }
    else if ($type == "exhibitor") {
      $amount= ($early ? 700 : 800);
    }

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, 8);

    $sql = "INSERT INTO Affiliation (name, street, nr, city, zipcode, country)
            VALUES ('" . mysqli_real_escape_string($conn, $affiliation) . "', '" . mysqli_real_escape_string($conn, $street) . "', '" . mysqli_real_escape_string($conn, $nr) . "', '" . mysqli_real_escape_string($conn, $city) . "', '" . mysqli_real_escape_string($conn, $zipcode) . "', '" . $country . "')";

    if (mysqli_query($conn, $sql)) {
      // clear title in case of None
      if (!$presentation || ($presentation == "None")) {
        $presentation = "None";
        $title = "NULL";
      }
      else {
        $title = "'" . mysqli_real_escape_string($conn, $title) . "'";
      }

      $affiliation_id = mysqli_insert_id($conn);
      $sql = "INSERT INTO Participant (gender, degree, firstname, lastname, email, pwd, phone, registration, registered, amount, payment, paid, presentation, title, abstract, submitted, affiliation_id)
              VALUES ('" . $gender . "', '" . $degree . "', '" . mysqli_real_escape_string($conn, $firstname) . "', '" . mysqli_real_escape_string($conn, $lastname) . "', '" . $email . "', '" . md5($password) . "', '" . $phone . "', '" . strtoupper($type) . "', NOW(), " . $amount . ", 'N', NULL, '" . $presentation . "', " . $title . ", 'N', NULL, " . $affiliation_id . ")";
      if (mysqli_query($conn, $sql)) {
        $participant_id = mysqli_insert_id($conn);
        $payment_id = date("ymd") . sprintf('%04d', $participant_id);
        $sql = "UPDATE Participant SET payment_id = '" . $payment_id . "' WHERE id = " . $participant_id;
        if (!mysqli_query($conn, $sql)) {
          $error .= "Database error: " . mysqli_error($conn);
        }
      }
      else {
        $error .= "Database error: " . mysqli_error($conn);
      }
    }
    else {
      $error .= "Database error: " . mysqli_error($conn);
    }

    // send e-mail
    if (!$error) {
      if ($degree) {
        $degree = $degree . " ";
      }
      $message = "Dear " . $degree . $firstname . " " . $lastname . ",";
      $message .= MESSAGE_PART_1;
      $message .= MESSAGE_PART_2 . $payment_id;
      $message .= MESSAGE_PART_3 . $password;
      $message .= MESSAGE_PART_4 . $amount . " Eur";
      if (($type != "exhibitor") && ($presentation != "None")) {
        $message .= MESSAGE_PART_PRESENTATION_1 . $presentation . MESSAGE_PART_PRESENTATION_2 . $title;
        $message .= MESSAGE_PART_ABSTRACT;
      }
      $message .= MESSAGE_PART_5;

      $mail = mail($email, SUBJECT, $message,
        "Content-Type: text/plain; charset=UTF-8\r\n"
        . "From: INCOME2017 <" . FROM . ">\r\n"
        . "Reply-To: " . FROM . "\r\n"
        . "Bcc: " . FROM . "\r\n"
        . "X-Mailer: PHP/" . phpversion());

      if ($mail) {
        echo "OK";
      }
      else {
        echo "NOK";
      }
    }
  }
  else {
    echo $error;
  }

  // close connection
  mysqli_close($conn);

}
?>
