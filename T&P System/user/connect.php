<?php
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $Email = $_POST['Email'];
      $MobileNumber = $_POST['MobileNumber'];
      $Password = $_POST['Password'];
      
      
      $conn = new mysqli('localhost','root','','se_db');
      if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error );
      }
            else{
                  $stmt = $conn->prepare("insert into registration(FirstName,LastName,Email,MobileNumber,Password)
                  values(?, ?, ?, ?, ?)");
                  $stmt->bind_param("sssis",$FirstName, $LastName, $Email, $MobileNumber, $Password);
                  $stmt->execute();
                      header("Location: login.html");
                  $stmt->close();
                  $conn->close();
            }

?> 
