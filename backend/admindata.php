<h1>Control Panel</h1>
<h3>List of All Pages</h3>

<table class="mainpagetable">
  <tr>
  <th>Id</th>
  <th>Title</th>
  <th>Content</th>
  <th></th>
  <th></th>
  </tr>
  <?php

//include database connection
include 'dbconfig.php';

//query all records from the database
$query = "select * from mainpages";

//execute the query
$result = $mysqli->query( $query );

//get number of rows returned
$num_results = $result->num_rows;
if( $num_results > 0){ //it means there's already at least one database record

    //loop to show each records
    while( $row = $result->fetch_assoc() ){

        extract($row);

        //creating new table row per record
        echo "<tr>";
        echo "        <td>{$id}</td>";
        echo "        <td>{$title}</td>";
        echo "        <td>{$content}</td>";
        echo "        <td><a href='editmainpage.php?id={$id}'>Edit</a></td>";
        echo "        <td><a href='deletemainpage.php?id={$id}'>Delete</a></td>";
        echo "    </tr>";
    }

}else{
    //if database table is empty

}
//disconnect from database
$result->free();
$mysqli->close();

?>  
</table>

<table class="subpagetable">
  <tr>
  <th>Id</th>
  <th>Title</th>
  <th>Content</th>
  <th></th>
  <th></th>
  </tr>
  <?php

//include database connection
include 'dbconfig.php';

//query all records from the database
$query = "select * from subpages";

//execute the query
$result = $mysqli->query( $query );

//get number of rows returned
$num_results = $result->num_rows;
if( $num_results > 0){ //it means there's already at least one database record

    //loop to show each records
    while( $row = $result->fetch_assoc() ){

        extract($row);

        //creating new table row per record
        echo "<tr>";
        echo "        <td>{$id}</td>";
        echo "        <td>{$title}</td>";
        echo "        <td>{$content}</td>";
        echo "        <td><a href='editsubpage.php?id={$id}'>Edit</a></td>";
        echo "        <td><a href='deletesubpage.php?id={$id}'>Delete</a></td>";
        echo "    </tr>";
    }

}else{
    //if database table is empty

}
//disconnect from database
$result->free();
$mysqli->close();

?>  
</table>



