<?php

//assigning var value that is created in url named id
$stu_id = $_GET['id'];

include 'config.php';

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error());
}

//using that id to select that students for deleting its data from db
$sql = "DELETE FROM students WHERE sid = {$stu_id};";
$result = $conn->query($sql);

//after deleting redirect to
header("location: http://localhost/crud_project/index.php");

//close connection
$conn->close();

  ?>