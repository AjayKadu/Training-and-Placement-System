<?php
      $ExtraField = $_POST['ExtraField'];
      $ExtraCertificate = $_POST['ExtraCertificate'];
      $Sport = $_POST['Sport'];
      $SportCertificate = $_POST['SportCertificate'];
      $InternshipCompany = $_POST['InternshipCompany'];
      $InternshipDuration = $_POST['InternshipDuration'];
      $InternshipCertificate = $_POST['InternshipCertificate'];
      $WorkshopDomain = $_POST['WorkshopDomain'];
      $WorkshopDuration = $_POST['WorkshopDuration'];
      $WorkshopCertificate = $_POST['WorkshopCertificate'];
      $StudentId = $_POST['StudentId'];
      
      
      $conn = new mysqli('localhost','root','','se_db');
      if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error );
      }
            else{
                  $stmt = $conn->prepare("insert into activity(StudentId,ExtraField,ExtraCertificate,Sport,SportCertificate,InternshipCompany,InternshipDuration,InternshipCertificate,WorkshopDomain,WorkshopDuration,WorkshopCertificate)
                  values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                  $stmt->bind_param("sssssssssss", $StudentId, $ExtraField, $ExtraCertificate, $Sport, $SportCertificate, $InternshipCompany,$InternshipDuration,$InternshipCertificate,$WorkshopDomain,$WorkshopDuration,$WorkshopCertificate);
                  $stmt->execute();
                  echo "Registration Successfully...." ."<br>". "Go to Login Page";
                  $stmt->close();
                  $conn->close();
            }

?> 
