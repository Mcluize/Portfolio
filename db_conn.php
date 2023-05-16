<?php  

$servername = "localhost";
$name = "root";
$password = "";

$db_name = "contactform";

$conn = mysqli_connect($servername, $name, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}