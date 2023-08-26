<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "se_db");

if (isset($_POST['delete_btn'])) {
  $id = $_POST['delete_id'];
  $query = "DELETE FROM feedback WHERE id='$id'";

  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['success'] = "Your data is deleted";
    header('location:../adminView/viewSizes.php');
  } else {
    $_SESSION['status'] = "Your data is not deleted. Error: " . mysqli_error($conn);
    header('location: ../adminView/viewSizes.php');
  }
}
?>
