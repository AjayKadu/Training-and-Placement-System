<h2>Edit Information</h2>

<?php

include_once "../uconfig/uconfig.php";

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM academic WHERE StudentId='$id'";
    $query_run = mysqli_query($conn, $query);
    foreach ($query_run as $row) {
        ?>

<form action="" method="post">
        <fieldset id="one" style="border-radius:3px ; border: 3px solid black;">
            <legend><label for="">
                    <h4>SSC</h4>
                </label></legend>


            <div class="SSC_main">

                <label for="">StudentId : </label>
                <input type="text" name="StudentId" value="<?php echo $row['StudentId'] ?>" id="StudentId">

                <label for="">SSCPassingYear</label>
                <input type="text" name="SSCPassingYear" value="<?php echo $row['SSCPassingYear'] ?>" id="SSCPassingYear">
                <br><br>
                <label for="">SSCPercentage:</label>
                <input type="number" name="SSCPercentage" value="<?php echo $row['SSCPercentage'] ?>" id="SSCPercentage">
                <br><br>

                <label for="">Upload Marksheet :</label>
                <input type="file" name="SSCMarksheet" value="<?php echo $row['SSCMarksheet'] ?>" id="SSCMarksheet">
        </fieldset>
        </div>
        <br>
        <fieldset id="sec" style="border-radius:3px ; border: 3px solid black;">
            <legend><label for="">
                    <h4>HSC</h4>
                </label></legend>
            <div class="HSC_main">

                <label for="">HSCPassingYear</label>
                <input type="number" name="HSCPassingYear" value="<?php echo $row['HSCPassingYear'] ?>" id="HSCPassingYear">
                <br><br>
                <label for="">HSCPercentage:</label>
                <input type="number" name="HSCPercentage" value="<?php echo $row['HSCPercentage'] ?>" id="HSCPercentage">
                <br><br>
                <label for="">Upload Marksheet :</label>
                <input type="file" name="HSCMarksheet" value="<?php echo $row['HSCMarksheet'] ?>" id="HSCMarksheet">
        </fieldset>

        </div>
        <br><br>
        <fieldset id="third" style="border-radius:3px ; border: 3px solid black;">
            <legend>
                <h4> <label for=""> Degree Qualifications</label></h4>
            </legend>
            <table>

                <tr>
                    <th> Sr.</th><br>
                    <th> Semester(S/W) <br></th>
                    <th> Total marks</th>
                    <th> Outoff </th>
                    <th> CGPA </th>
                    <th> Percentage</th>
                    <th> Pass/Fail</th>
                    <th>Marksheet</th>
                </tr>

                <tr>
                    <th>1.</th>
                    <th> <input type="text" name="Sem1" value="<?php echo $row['Sem1'] ?>" id="Sem1"> </th>
                    <th> <input type="number" name="Totalmark1" value="<?php echo $row['Totalmark1'] ?>" id="Totalmark1"> </th>
                    <th> <input type="number" name="Obtain1" value="<?php echo $row['Obtain1'] ?>" id="Obtain1"> </th>
                    <th> <input type="number" name="CGPA1" value="<?php echo $row['CGPA1'] ?>" id="CGPA1"> </th>
                    <th> <input type="number" name="Percentage1" value="<?php echo $row['Percentage1'] ?>" id="Percentage1"> </th>
                    <th> <input type="text" name="Result1" value="<?php echo $row['Result1'] ?>" id="Result1"> </th>
                    <th> <input type="file" name="Marksheet1" placeholder="Upload" value="<?php echo $row['Marksheet1'] ?>" id="Marksheet1"> </th>
                </tr>

                <tr>
                    <th>2.</th>
                    <th> <input type="text" name="Sem2" value="<?php echo $row['Sem2'] ?>" id="Sem2"> </th>
                    <th> <input type="number" name="Totalmark2" value="<?php echo $row['Totalmark2'] ?>" id="Totalmark2"> </th>
                    <th> <input type="number" name="Obtain2" value="<?php echo $row['Obtain2'] ?>" id="Obtain2"> </th>
                    <th> <input type="number" name="CGPA2" value="<?php echo $row['CGPA2'] ?>" id="CGPA2"> </th>
                    <th> <input type="number" name="Percentage2" value="<?php echo $row['Percentage2'] ?>" id="Percentage2"> </th>
                    <th> <input type="text" name="Result2" value="<?php echo $row['Result2'] ?>" id="Result2"> </th>
                    <th> <input type="file" name="Marksheet2" placeholder="Upload" value="<?php echo $row['Marksheet2'] ?>" id="Marksheet2"> </th>
                </tr>


                <tr>
                    <th>3.</th>
                    <th> <input type="text" name="Sem3" value="<?php echo $row['Sem3'] ?>" id="Sem3"> </th>
                    <th> <input type="number" name="Totalmark3" value="<?php echo $row['Totalmark3'] ?>" id="Totalmark3"> </th>
                    <th> <input type="number" name="Obtain3" value="<?php echo $row['Obtain3'] ?>" id="Obtain3"> </th>
                    <th> <input type="number" name="CGPA3" value="<?php echo $row['CGPA3'] ?>" id="CGPA3"> </th>
                    <th> <input type="number" name="Percentage3" value="<?php echo $row['Percentage3'] ?>" id="Percentage3"> </th>
                    <th> <input type="text" name="Result3" value="<?php echo $row['Result3'] ?>" id="Result3"> </th>
                    <th> <input type="file" name="Marksheet3" placeholder="Upload" value="<?php echo $row['Marksheet3'] ?>" id="Marksheet3"> </th>
                </tr>


                <tr>
                    <th>4.</th>
                    <th> <input type="text" name="Sem4" value="<?php echo $row['Sem4'] ?>" id="Sem4"> </th>
                    <th> <input type="number" name="Totalmark4" value="<?php echo $row['Totalmark4'] ?>" id="Totalmark4"> </th>
                    <th> <input type="number" name="Obtain4" value="<?php echo $row['Obtain4'] ?>" id="Obtain4"> </th>
                    <th> <input type="number" name="CGPA4" value="<?php echo $row['CGPA4'] ?>" id="CGPA4"> </th>
                    <th> <input type="number" name="Percentage4" value="<?php echo $row['Percentage4'] ?>" id="Percentage4"> </th>
                    <th> <input type="text" name="Result4" value="<?php echo $row['Result4'] ?>" id="Result4"> </th>
                    <th> <input type="file" name="Marksheet4" placeholder="Upload" value="<?php echo $row['Marksheet4'] ?>" id="Marksheet4"> </th>
                </tr>


                <tr>
                    <th>5.</th>
                    <th> <input type="text" name="Sem5" value="<?php echo $row['Sem5'] ?>" id="Sem5"> </th>
                    <th> <input type="number" name="Totalmark5" value="<?php echo $row['Totalmark5'] ?>" id="Totalmark5"> </th>
                    <th> <input type="number" name="Obtain5" value="<?php echo $row['Obtain5'] ?>" id="Obtain5"> </th>
                    <th> <input type="number" name="CGPA5" value="<?php echo $row['CGPA5'] ?>" id="CGPA1"> </th>
                    <th> <input type="number" name="Percentage5" value="<?php echo $row['Percentage5'] ?>" id="Percentage5"> </th>
                    <th> <input type="text" name="Result5" value="<?php echo $row['Result5'] ?>" id="Result5"> </th>
                    <th> <input type="file" name="Marksheet5" placeholder="Upload" value="<?php echo $row['Marksheet5'] ?>" id="Marksheet5"> </th>
                </tr>

                <tr>
                    <th>6.</th>
                    <th> <input type="text" name="Sem6" value="<?php echo $row['Sem6'] ?>" id="Sem6"> </th>
                    <th> <input type="number" name="Totalmark6" value="<?php echo $row['Totalmark6'] ?>" id="Totalmark6"> </th>
                    <th> <input type="number" name="Obtain6" value="<?php echo $row['Obtain6'] ?>" id="Obtain6"> </th>
                    <th> <input type="number" name="CGPA6" value="<?php echo $row['CGPA6'] ?>" id="CGPA6"> </th>
                    <th> <input type="number" name="Percentage6" value="<?php echo $row['Percentage6'] ?>" id="Percentage6"> </th>
                    <th> <input type="text" name="Result6" value="<?php echo $row['Result6'] ?>" id="Result6"> </th>
                    <th> <input type="file" name="Marksheet6" placeholder="Upload" value="<?php echo $row['Marksheet6'] ?>" id="Marksheet6"> </th>
                </tr>


                <tr>
                    <th>7.</th>
                    <th> <input type="text" name="Sem7" value="<?php echo $row['Sem7'] ?>" id="Sem7"> </th>
                    <th> <input type="number" name="Totalmark7" value="<?php echo $row['Totalmark7'] ?>" id="Totalmark7"> </th>
                    <th> <input type="number" name="Obtain7" value="<?php echo $row['Obtain7'] ?>" id="Obtain7"> </th>
                    <th> <input type="number" name="CGPA7" value="<?php echo $row['CGPA7'] ?>" id="CGPA7"> </th>
                    <th> <input type="number" name="Percentage7" value="<?php echo $row['Percentage7'] ?>" id="Percentage7"> </th>
                    <th> <input type="text" name="Result7" value="<?php echo $row['Result7'] ?>" id="Result7"> </th>
                    <th> <input type="file" name="Marksheet7" placeholder="Upload" value="<?php echo $row['Marksheet7'] ?>" id="Marksheet7"> </th>
                </tr>

                <tr>
                    <th>8.</th>
                    <th> <input type="text" name="Sem8" value="<?php echo $row['Sem8'] ?>" id="Sem8"> </th>
                    <th> <input type="number" name="Totalmark8" value="<?php echo $row['Totalmark8'] ?>" id="Totalmark8"> </th>
                    <th> <input type="number" name="Obtain8" value="<?php echo $row['Obtain8'] ?>" id="Obtain8"> </th>
                    <th> <input type="number" name="CGPA8" value="<?php echo $row['CGPA8'] ?>" id="CGPA8"> </th>
                    <th> <input type="number" name="Percentage8" value="<?php echo $row['Percentage8'] ?>" id="Percentage8"> </th>
                    <th> <input type="text" name="Result8" value="<?php echo $row['Result8'] ?>" id="Result8"> </th>
                    <th> <input type="file" name="Marksheet8" placeholder="Upload" value="<?php echo $row['Marksheet8'] ?>" id="Marksheet8"> </th>
                </tr>

            </table>
        </fieldset>
            <a href="../adminView/viewProductSizes.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            </form>
        <?php
    }



}