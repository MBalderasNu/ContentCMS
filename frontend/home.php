<?php 
//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "SELECT * FROM mainpages WHERE id = 1";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

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
   <?php echo $title; ?>
   <?php echo "hey come on";?>
</head>
<body>   
</body>
</html>