<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "se_db");

if (isset($_POST['delete_btn'])) {
  $id = $_POST['delete_id'];
  $query = "DELETE FROM academic WHERE StudentId='$id'";

  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['success'] = "Your data is deleted";
    header('location:../adminView/viewAllProducts.php');
  } else {
    $_SESSION['status'] = "Your data is not deleted. Error: " . mysqli_error($conn);
    header('location:../adminView/viewAllProducts.php');
  }
}
?>
