<?php 
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

//assign the result to certain variable so our html form will be filled up with values
$id = $row['id'];
$title = $row['title'];
$content = $row['content'];
?>

<h3>Update Page Content</h3>
<style type = "text/css">
    form {
    width:100%;
    height:450px;
    margin:auto;
    position:relative;
    }
    input {
    width:100%;
    height: 25px;
   }
      </style>
<form id="form" action="updatemainpage.php" method="post">
    <input type="hidden" name="id" value='<?php echo $id;  ?>'/>
  <label for="title">Title: </label>
  <input type="text" name="title" value='<?php echo $title;  ?>'/>
  <br>
  <label for="content">Content: </label>
  <input type="text" name="content" value='<?php echo $content;  ?>'/>
  <br>
  <input type="submit" value="Update Page">
</form>

<?php
//disconnect from database
$result->free();
$mysqli->close();
?>
