<?php
      $Feedback = $_POST['Feedback'];
      
      $conn = new mysqli('localhost','root','','se_db');
      if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error );
      }
            else{
                  $stmt = $conn->prepare("insert into feedback(Feedback)values(?)");
                  $stmt->bind_param("s",$Feedback);
                  $stmt->execute();
                  echo "Thank You For Your Valuable Feedback";
                  $stmt->close();
                  $conn->close();
            }

?> 
