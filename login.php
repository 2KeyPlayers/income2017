<?php
include "./inc/config.inc";

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if ($post) {

  $paymentid = stripslashes($_POST["paymentid"]);
  $pwd = stripslashes($_POST["pwd"]);

  $error = "";

  // check required fields
  if (!$paymentid) {
    $error .= PAYMENTID_REQUIRED;
  }
  if (!$error && !$pwd) {
    $error .= PASSWORD_REQUIRED;
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
    $sql = "SELECT pwd, payment FROM Participant WHERE payment_id = '" . $paymentid . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (md5($pwd) != $row["pwd"]) {
          $error = WRONG_PASSWORD;
        }
        else if ($row["payment"] == "Y") {
          $error = PAYMENT_ALREADY_MADE;
        }
      }
      else {
        $error = PAYMENTID_NOT_RECOGNIZED;
      }
    }
    else {
      $error .= "Database error: " . mysqli_error($conn);
    }
  }

  if (!$error) {
    echo "OK|" . $paymentid . "|" . $pwd;
  }
  else {
    echo $error;
  }

  // close connection
  mysqli_close($conn);

}
?>
