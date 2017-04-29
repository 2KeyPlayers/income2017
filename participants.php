 <?php
include "./inc/config.inc";

// create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
  mysqli_set_charset($conn, "utf8");
}

$sql = "SELECT * FROM Participant";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}
echo $count . " results";

mysqli_close($conn);
?>
