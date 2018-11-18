<?php 
header("Access-Control-Allow-Origin: *");

//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "select * from mainpages
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

//execute the query
$result = $mysqli->query( $query );

//get the result
$row = $result->fetch_assoc();

echo $row;
//echo json_encode($row);
?>
