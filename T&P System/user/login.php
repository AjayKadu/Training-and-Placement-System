<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost','root','','se_db');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error );
    } else {
        $sql = "SELECT * FROM registration WHERE FirstName='$username' AND Password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num==1){
            header("Location: PersonalInfo.html");
            exit();
        } else {
            echo "Invalid login credentials";
        }
    }
?>
