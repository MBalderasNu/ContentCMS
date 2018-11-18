<?php 
//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "select * from subpages
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

<h3>Edit Page Content</h3>
<form id="form" action="updatesubpage.php" method="post">
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