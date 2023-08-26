<?php
      $StudentId = $_POST['StudentId'];
      $SSCPassingYear = $_POST['SSCPassingYear'];
      $SSCPercentage = $_POST['SSCPercentage'];
      $SSCMarksheet = $_POST['SSCMarksheet'];

      $HSCPassingYear = $_POST['HSCPassingYear'];
      $HSCPercentage = $_POST['HSCPercentage'];
      $HSCMarksheet = $_POST['HSCMarksheet'];

      $Sem1 = $_POST['Sem1'];
      $Totalmark1 = $_POST['Totalmark1'];
      $Obtain1 = $_POST['Obtain1'];
      $CGPA1 = $_POST['CGPA1'];
      $Result1 = $_POST['Result1'];
      $Percentage1 = $_POST['Percentage1'];
      $Marksheet1 = $_POST['Marksheet1'];

      $Sem2 = $_POST['Sem2'];
      $Totalmark2 = $_POST['Totalmark2'];
      $Obtain2 = $_POST['Obtain2'];
      $CGPA2 = $_POST['CGPA2'];
      $Result2 = $_POST['Result2'];
      $Percentage2 = $_POST['Percentage2'];
      $Marksheet2 = $_POST['Marksheet2'];

      $Sem3 = $_POST['Sem3'];
      $Totalmark3 = $_POST['Totalmark3'];
      $Obtain3 = $_POST['Obtain3'];
      $CGPA3 = $_POST['CGPA3'];
      $Result3 = $_POST['Result3'];
      $Percentage3 = $_POST['Percentage3'];
      $Marksheet3 = $_POST['Marksheet3'];

      $Sem4 = $_POST['Sem4'];
      $Totalmark4 = $_POST['Totalmark4'];
      $Obtain4 = $_POST['Obtain4'];
      $CGPA4 = $_POST['CGPA4'];
      $Result4 = $_POST['Result4'];
      $Percentage4 = $_POST['Percentage4'];
      $Marksheet4 = $_POST['Marksheet4'];

      $Sem5 = $_POST['Sem5'];
      $Totalmark5 = $_POST['Totalmark5'];
      $Obtain5 = $_POST['Obtain5'];
      $CGPA5 = $_POST['CGPA5'];
      $Result5 = $_POST['Result5'];
      $Percentage5 = $_POST['Percentage5'];
      $Marksheet5 = $_POST['Marksheet5'];

      $Sem6 = $_POST['Sem6'];
      $Totalmark6 = $_POST['Totalmark6'];
      $Obtain6 = $_POST['Obtain6'];
      $CGPA6 = $_POST['CGPA6'];
      $Result6 = $_POST['Result6'];
      $Percentage6 = $_POST['Percentage6'];
      $Marksheet6 = $_POST['Marksheet6'];

      $Sem7 = $_POST['Sem7'];
      $Totalmark7 = $_POST['Totalmark7'];
      $Obtain7 = $_POST['Obtain7'];
      $CGPA7 = $_POST['CGPA7'];
      $Result7 = $_POST['Result7'];
      $Percentage7 = $_POST['Percentage7'];
      $Marksheet7 = $_POST['Marksheet7'];

      $Sem8 = $_POST['Sem8'];
      $Totalmark8 = $_POST['Totalmark8'];
      $Obtain8 = $_POST['Obtain8'];
      $CGPA8 = $_POST['CGPA8'];
      $Result8 = $_POST['Result8'];
      $Percentage8 = $_POST['Percentage8'];
      $Marksheet8 = $_POST['Marksheet8'];
      
 

      
      
      
      $conn = new mysqli('localhost','root','','se_db');
      if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error );
      }
            else{
                  $stmt = $conn->prepare("insert into academic(StudentId,SSCPassingYear,SSCPercentage,SSCMarksheet,
                  HSCPassingYear,HSCPercentage,HSCMarksheet,
                  Sem1,Totalmark1,Obtain1,CGPA1,Result1,Percentage1,Marksheet1,
                  Sem2,Totalmark2,Obtain2,CGPA2,Result2,Percentage2,Marksheet2,
                  Sem3,Totalmark3,Obtain3,CGPA3,Result3,Percentage3,Marksheet3,
                  Sem4,Totalmark4,Obtain4,CGPA4,Result4,Percentage4,Marksheet4,
                  Sem5,Totalmark5,Obtain5,CGPA5,Result5,Percentage5,Marksheet5,
                  Sem6,Totalmark6,Obtain6,CGPA6,Result6,Percentage6,Marksheet6,
                  Sem7,Totalmark7,Obtain7,CGPA7,Result7,Percentage7,Marksheet7,
                  Sem8,Totalmark8,Obtain8,CGPA8,Result8,Percentage8,Marksheet8)

                 values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                 $stmt->bind_param("siisiissiiisissiiisissiiisissiiisissiiisissiiisissiiisissiiisis",
                 $StudentId, $SSCPassingYear, $SSCPercentage, $SSCMarksheet, 
                 $HSCPassingYear, $HSCPercentage, $HSCMarksheet, 
                 $Sem1, $Totalmark1, $Obtain1, $CGPA1, $Result1, $Percentage1, $Marksheet1, 
                 $Sem2, $Totalmark2, $Obtain2, $CGPA2, $Result2, $Percentage2, $Marksheet2, 
                 $Sem3, $Totalmark3, $Obtain3, $CGPA3, $Result3, $Percentage3, $Marksheet3,
                 $Sem4, $Totalmark4, $Obtain4, $CGPA4, $Result4, $Percentage4, $Marksheet4, 
                 $Sem5, $Totalmark5, $Obtain5, $CGPA5, $Result5, $Percentage5, $Marksheet5,
                 $Sem6, $Totalmark6, $Obtain6, $CGPA6, $Result6, $Percentage6, $Marksheet6,
                 $Sem7, $Totalmark7, $Obtain7, $CGPA7, $Result7, $Percentage7, $Marksheet7,
                 $Sem8, $Totalmark8, $Obtain8, $CGPA8, $Result8, $Percentage8, $Marksheet8);


                  $stmt->execute();
                  echo "Registration Successfully...." ."<br>". "Go to Login Page";
                  $stmt->close();
                  $conn->close();
            }
