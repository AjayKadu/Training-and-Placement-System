<h2>All Information</h2>
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
      <th>SSCPassingYear</th>
      <th>SSCPercentage</th>
      <th>SSCMarksheet</th>
      <th>HSCPassingYear</th>
      <th>HSCPercentage</th>
      <th>HSCMarksheet</th>
      <th>Sem1</th>
      <th>Totalmark1</th>
      <th>Obtain1</th>
      <th>CGPA1</th>
      <th>Percentage1</th>
      <th>Result1</th>
      <th>Marksheet1</th>
      <th>Sem2</th>
      <th>Totalmark2</th>
      <th>Obtain2</th>
      <th>CGPA2</th>
      <th>Percentage2</th>
      <th>Result2</th>
      <th>Marksheet2</th>
      <th>Sem3</th>
      <th>Totalmark3</th>
      <th>Obtain3</th>
      <th>CGPA3</th>
      <th>Percentage3</th>
      <th>Result3</th>
      <th>Marksheet3</th>
      <th>Sem4</th>
      <th>Totalmark4</th>
      <th>Obtain4</th>
      <th>CGPA4</th>
      <th>Percentage4</th>
      <th>Result4</th>
      <th>Marksheet4</th>
      <th>Sem5</th>
      <th>Totalmark5</th>
      <th>Obtain5</th>
      <th>CGPA5</th>
      <th>Percentage5</th>
      <th>Result5</th>
      <th>Marksheet5</th>
      <th>Sem7</th>
      <th>Totalmark7</th>
      <th>Obtain7</th>
      <th>CGPA7</th>
      <th>Percentage7</th>
      <th>Result7</th>
      <th>Marksheet7</th>
      <th>Sem8</th>
      <th>Totalmark8</th>
      <th>Obtain8</th>
      <th>CGPA8</th>
      <th>Percentage8</th>
      <th>Result8</th>
      <th>Marksheet8</th>
      <th class="text-center" colspan="2">Action</th>
    </tr>
  </thead>

  <?php
  include_once "../uconfig/uconfig.php";
  $sql = "SELECT * FROM pesonal INNER JOIN academic ON pesonal.StudentId = academic.StudentId";
  $result = $conn->query($sql);
  $count = 1;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      ?>

      <tr>
        <td>
          <?= $count ?>
        </td>
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
          <?= $row["SSCPassingYear"] ?>
        </td>
        <td>
          <?= $row["SSCPercentage"] ?>
        </td>
        <td>
          <?= $row["SSCMarksheet"] ?>
        </td>
        <td>
          <?= $row["HSCPassingYear"] ?>
        </td>
        <td>
          <?= $row["HSCPercentage"] ?>
        </td>
        <td>
          <?= $row["HSCMarksheet"] ?>
        </td>
        <td>
          <?= $row["Sem1"] ?>
        </td>
        <td>
          <?= $row["Totalmark1"] ?>
        </td>
        <td>
          <?= $row["Obtain1"] ?>
        </td>
        <td>
          <?= $row["CGPA1"] ?>
        </td>
        <td>
          <?= $row["Percentage1"] ?>
        </td>
        <td>
          <?= $row["Result1"] ?>
        </td>
        <td>
          <?= $row["Marksheet1"] ?>
        </td>
        <td>
          <?= $row["Sem2"] ?>
        </td>
        <td>
          <?= $row["Totalmark2"] ?>
        </td>
        <td>
          <?= $row["Obtain2"] ?>
        </td>
        <td>
          <?= $row["CGPA2"] ?>
        </td>
        <td>
          <?= $row["Percentage2"] ?>
        </td>
        <td>
          <?= $row["Result2"] ?>
        </td>
        <td>
          <?= $row["Marksheet2"] ?>
        </td>
        <td>
          <?= $row["Sem3"] ?>
        </td>
        <td>
          <?= $row["Totalmark3"] ?>
        </td>
        <td>
          <?= $row["Obtain3"] ?>
        </td>
        <td>
          <?= $row["CGPA3"] ?>
        </td>
        <td>
          <?= $row["Percentage3"] ?>
        </td>
        <td>
          <?= $row["Result3"] ?>
        </td>
        <td>
          <?= $row["Marksheet3"] ?>
        </td>
        <td>
          <?= $row["Sem4"] ?>
        </td>
        <td>
          <?= $row["Totalmark4"] ?>
        </td>
        <td>
          <?= $row["Obtain4"] ?>
        </td>
        <td>
          <?= $row["CGPA4"] ?>
        </td>
        <td>
          <?= $row["Percentage4"] ?>
        </td>
        <td>
          <?= $row["Result4"] ?>
        </td>
        <td>
          <?= $row["Marksheet4"] ?>
        </td>
        <td>
          <?= $row["Sem5"] ?>
        </td>
        <td>
          <?= $row["Totalmark5"] ?>
        </td>
        <td>
          <?= $row["Obtain5"] ?>
        </td>
        <td>
          <?= $row["CGPA5"] ?>
        </td>
        <td>
          <?= $row["Percentage5"] ?>
        </td>
        <td>
          <?= $row["Result5"] ?>
        </td>
        <td>
          <?= $row["Marksheet5"] ?>
        </td>
        <td>
          <?= $row["Sem6"] ?>
        </td>
        <td>
          <?= $row["Totalmark6"] ?>
        </td>
        <td>
          <?= $row["Obtain6"] ?>
        </td>
        <td>
          <?= $row["CGPA6"] ?>
        </td>
        <td>
          <?= $row["Percentage6"] ?>
        </td>
        <td>
          <?= $row["Result6"] ?>
        </td>
        <td>
          <?= $row["Marksheet6"] ?>
        </td>
        <td>
          <?= $row["Sem7"] ?>
        </td>
        <td>
          <?= $row["Totalmark7"] ?>
        </td>
        <td>
          <?= $row["Obtain7"] ?>
        </td>
        <td>
          <?= $row["CGPA7"] ?>
        </td>
        <td>
          <?= $row["Percentage7"] ?>
        </td>
        <td>
          <?= $row["Result7"] ?>
        </td>
        <td>
          <?= $row["Marksheet7"] ?>
        </td>
        <td>
          <?= $row["Sem8"] ?>
        </td>
        <td>
          <?= $row["Totalmark8"] ?>
        </td>
        <td>
          <?= $row["Obtain8"] ?>
        </td>
        <td>
          <?= $row["CGPA8"] ?>
        </td>
        <td>
          <?= $row["Percentage8"] ?>
        </td>
        <td>
          <?= $row["Result8"] ?>
        </td>
        <td>
          <?= $row["Marksheet8"] ?>
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