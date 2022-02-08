<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

<?php

  $conn = new mysqli("localhost","root", "","crud");

  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error());
}

//getting url id value and assigning
$stu_id = $_GET['id'];

//using that id to select that students for editing change
  $sql = "SELECT * FROM students where sid={$stu_id}";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
             
  ?>


    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>"/>
          <input type="text" name="sname" value="<?php echo $row['name'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['address'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="selected">
              <option value="" selected disabled>Select Class</option>
              <option value="BCA">BCA</option>
              <option value="BSC">BSC</option>
              <option value="B.TECH">B.TECH</option>
              <option value="BBA">BBA</option>
              <option value="BBS">BBS</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['phone'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php }} ?>

</div>
</div>
</body>
</html>
