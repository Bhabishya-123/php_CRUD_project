<?php
  
 //this file is for connection to mysql as it is used in every page
 //whenever username ,password,dbname,etc changes we dont need to be scare

 
$conn = new mysqli("localhost","root", "","crud");
//conclusion: You can just include it in any file and any changes made in it change everywhere
// just by include 'filename.php' command

  ?>