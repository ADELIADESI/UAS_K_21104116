<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE dosen(
NIDN INT(8) PRIMARY KEY,
NAMA VARCHAR(35) NOT NULL,
MK VARCHAR(20) NOT NULL,
JK VARCHAR(40) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>