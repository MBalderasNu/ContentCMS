<?php 
//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "select * from mainpages where id=1";

//execute the query
$result = $mysqli->query( $query );

//get the result
$row = $result->fetch_assoc();

//assign the result to certain variable so our html will be filled up with values
$id = $row['id'];
$title = $row['title'];
$content = $row['content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $title ?>
</head>
<body>
    <?php echo $content?>


    
</body>
</html>