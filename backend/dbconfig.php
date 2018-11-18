<?php

$host = "localhost";
$username = "";//can use your own username
$password = "";//can use your own password
$db_name = "content_data"; //database name
//connect to mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);

$db = mysqli_connect($host,$username,$password,$db_name);

//check if any connection error was encountered
if(mysqli_connect_errno()) {
echo "Error: Could not connect to database.";
exit;
}
?>
