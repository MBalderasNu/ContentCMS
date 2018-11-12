<?php
echo $_POST['name'] + '<br>';
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "insert into mainpages
    set
    title = '".$mysqli->real_escape_string($_POST['title'])."',
    content = '".$mysqli->real_escape_string($_POST['content'])."'";

//execute the query
if( $mysqli->query($query) ) {
    //if saving success
    header("Location: index.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to create record.";
}
//close database connection
$mysqli->close();
?>