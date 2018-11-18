<?php

//include database connection
include 'dbconfig.php';

//write our update query
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection

$query = "update mainpages
set
title = '".$db->real_escape_string($_POST['title'])."',
content = '".$db->real_escape_string($_POST['content'])."'
where id='".$db->real_escape_string($_REQUEST['id'])."'";

//execute the query
if( $db->query($query) ) {

    //if updating the record was successful
    header("Location: admindata.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();

}else{
    //if unable to update new record
    echo "Database Error: Unable to update record.";
}
//close database connection
$db->close();
?>