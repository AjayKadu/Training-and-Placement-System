<?php
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $FatherName = $_POST['FatherName'];
      $MobileNumber = $_POST['MobileNumber'];
      $StudentId = $_POST['StudentId'];
      $LocalAddress = $_POST['LocalAddress'];
      $PermanentAddress = $_POST['PermanentAddress'];
      $BloodGroup = $_POST['BloodGroup'];
      $Dateofbirth = $_POST['Dateofbirth'];
      
      
      $conn = new mysqli('localhost','root','','se_db');
      if($conn->connect_error)
      {
            die('Connection Failed : ' .$conn->connect_error );
      }
            else{
                  $stmt = $conn->prepare("insert into pesonal(FirstName,LastName,FatherName,MobileNumber,StudentId,LocalAddress,PermanentAddress,BloodGroup,Dateofbirth)
                  values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
                  $stmt->bind_param("sssisssis",$FirstName, $LastName, $FatherName, $MobileNumber, $StudentId, $LocalAddress, $PermanentAddress, $BloodGroup, $Dateofbirth,);
                  $stmt->execute();
                  echo "Registration Successfully...." ."<br>" . "Go to Login Page";
                  $stmt->close();
                  $conn->close();
            }

?> 
