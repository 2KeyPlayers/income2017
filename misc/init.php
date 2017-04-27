 <?php
/*include "../inc/config.inc";

// create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
  mysqli_set_charset($conn, "utf8");
}

// drop tables
$sql = "DROP TABLE IF EXISTS Participant";
if (mysqli_query($conn, $sql)) {
    echo "Table Participant dropped successfully<br>";
} else {
    echo "Error dropping table: " . mysqli_error($conn) . "<br>";
}

$sql = "DROP TABLE IF EXISTS Affiliation";
if (mysqli_query($conn, $sql)) {
    echo "Table Affiliation dropped successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Affiliation (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  street VARCHAR(50) NOT NULL,
  nr VARCHAR(10) NOT NULL,
  city VARCHAR(50) NOT NULL,
  zipcode VARCHAR(10) NOT NULL,
  country VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Affiliation created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS Participant (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  gender VARCHAR(1) NOT NULL,
  degree VARCHAR(10),
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  pwd VARCHAR(50) NOT NULL,
  phone VARCHAR(50),
  registration VARCHAR(10) NOT NULL,
  registered TIMESTAMP,
  payment_id VARCHAR(10),
  amount INT NOT NULL,
  payment VARCHAR(1) NOT NULL DEFAULT 'N',
  paid TIMESTAMP NULL,
  presentation VARCHAR(10) NOT NULL,
  title VARCHAR(256),
  abstract VARCHAR(1) NOT NULL DEFAULT 'N',
  submitted TIMESTAMP NULL,
  affiliation_id INT UNSIGNED NOT NULL,
  INDEX aff_ind (affiliation_id),
  FOREIGN KEY (affiliation_id)
  REFERENCES Affiliation(id)
  ON UPDATE NO ACTION
  ON DELETE RESTRICT
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Participant created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);*/
?>
