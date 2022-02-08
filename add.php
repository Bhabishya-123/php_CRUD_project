<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="selected">
            <option value="" selected disabled>Select Class</option>

                <?php
                //providing selection option that will come from database if availabele only
        $conn = new mysqli("localhost","root", "","crud");

           if($conn->connect_error){
              die("Connection failed: ".$conn->connect_error());
}
         $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

    
      while($row = $result->fetch_assoc()){ 
      ?>

      <option value="<?php echo $row['class'] ?>"> <?php echo $row['class'] ?> </option>

       <?php }?>
            </select>


        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>








