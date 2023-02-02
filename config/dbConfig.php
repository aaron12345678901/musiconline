<?php


$hn = "localhost";
$un = "bob";
$pw = ")UbXFe9V7ZNw2[P5";
$db = "vintageVinyl";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);

}


?>