<h2>Extra Activity</h2>
<table class="table ">
  <thead>
    <tr>
      <th>StudentId</th>
      <th>ExtraField</th>
      <th>ExtraCertificate</th>
      <th>Sport</th>
      <th>SportCertificate</th>
      <th>InternshipCompany</th>
      <th>InternshipDuration</th>
      <th>InternshipCertificate</th>
      <th>WorkshopDomain</th>
      <th>WorkshopDuration</th>
      <th>WorkshopCertificate</th>
      <th class="text-center" colspan="2">Action</th>
    </tr>
  </thead>

  <?php
  include_once "../uconfig/uconfig.php";
  $sql = "SELECT * FROM activity";
  $result = $conn->query($sql);
  $count = 1;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc())
     {
      ?>

      <tr>
        
        <td>
          <?= $row["StudentId"] ?>
        </td>

        <td>
          <?= $row["ExtraField"] ?>
        </td>
        <td>
          <?= $row["ExtraCertificate"] ?>
        </td>
        <td>
          <?= $row["Sport"] ?>
        </td>
        <td>
          <?= $row["SportCertificate"] ?>
        </td>
        <td>
          <?= $row["InternshipCompany"] ?>
        </td>
        <td>
          <?= $row["InternshipDuration"] ?>
        </td>
        <td>
          <?= $row["InternshipCertificate"] ?>
        </td>
        <td>
          <?= $row["WorkshopDomain"] ?>
        </td>
        <td>
          <?= $row["WorkshopDuration"] ?>
        </td>
        <td>
          <?= $row["WorkshopCertificate"] ?>
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