<?php
//opens new connection to the database

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sample_db";

// Create connection
$dbconn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
} 

//$dbconn -> close();

?>

<!-- 

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
//echo connected_na_ko;
 -->