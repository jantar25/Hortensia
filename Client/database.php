<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE BarberShop";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BarberShop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// // sql to create table
// $sql = "CREATE TABLE Clients (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// names VARCHAR(30) NOT NULL,
// telephone VARCHAR(30) NOT NULL,
// amount VARCHAR(50),
// haircut VARCHAR(50),
// dateop VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();
?>