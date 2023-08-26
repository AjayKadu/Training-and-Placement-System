
<div >
  <h3>Personal Information</h3>
  <table class="table ">
  <thead>
    <tr>

      <th>StudentId</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>FatherName</th>
      <th>LocalAddress</th>
      <th>PermanentAddress</th>
      <th>BloodGroup</th>
      <th>MobileNumber</th>
      <th>Dateofbirth</th>
      <th class="text-center" colspan="2">Action</th>
    </tr>
    </thead>
    <?php
      include_once "../uconfig/uconfig.php";
      $sql="SELECT * from pesonal";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>

      <tr>
        
        <td>
          <?= $row["StudentId"] ?>
        </td>
        <td>
          <?= $row["FirstName"] ?>
        </td>
        <td>
          <?= $row["LastName"] ?>
        </td>
        <td>
          <?= $row["FatherName"] ?>
        </td>
        <td>
          <?= $row["LocalAddress"] ?>
        </td>
        <td>
          <?= $row["PermanentAddress"] ?>
        </td>
        <td>
          <?= $row["BloodGroup"] ?>
        </td>
        <td>
          <?= $row["MobileNumber"] ?>
        </td>
        <td>
          <?= $row["Dateofbirth"] ?>
        </td>
        <td>
        <form action="controller/editacademic.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['StudentId'] ?>">
        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
        </form>
        </td>

       <td>
        <form action="controller/deleteallinfo.php" method="post">
        <input type="hidden" name="delete_id" value="<?php echo $row['StudentId'] ?>">
        <button type="submit" name="delete_btn" class="btn btn-danger">Delete </button>
        </form>
        </td>
        
      </tr>
      <?php
      $count = $count + 1;

    }
  }
  ?>
</table>