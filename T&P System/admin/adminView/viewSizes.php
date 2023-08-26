<div>
  <h3>Feedbacks</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Feedback</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../uconfig/uconfig.php";
    $sql = "SELECT * from feedback";
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
            <?= $row["Feedback"] ?>
          </td>

          <td>
            <form action="controller/feedbackController.php" method="post">
              <input type="hidden" name="delete_id" value="<?php echo $row['id']?>">
              <button type="submit" name="delete_btn" class="btn btn-danger">Delete </button>
            </form>
          </td>

          <?php
          $count = $count + 1;
      }
    }
    ?>

  </table>


</div>