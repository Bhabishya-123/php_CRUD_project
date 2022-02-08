<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
     


            <?php
  $conn = new mysqli("localhost","root", "","crud");

  //incase connection failed show message and exit from php script
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error());
}


  //2nd step run sql query
  $sql = "SELECT * FROM students";
  $result = $conn->query($sql);

  //checking if any result is found? if found than show else show error_message
  if($result->num_rows>0){
      while($row = $result->fetch_assoc()){ 
        ?>  
        <tr>
        <td><?php echo $row["sid"] ?></td>
        <td> <?php echo  $row["name"] ?> </td>
        <td> <?php echo $row["address"] ?> </td> 
        <td> <?php echo $row["class"]?> </td> 
        <td> <?php echo $row["phone"]?> </td> 
        <td>
        <a href='edit.php?id=<?php echo $row['sid'] //passing id to url when edit button is clicked ?>'>Edit</a>  
        <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a> 
        </td>
       </tr>
         
     <?php }}?>


          
        </tbody>
    </table>
</div>
</div>
</body>
</html>
