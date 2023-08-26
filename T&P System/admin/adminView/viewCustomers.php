<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Mobile Number</th>
        <th class="text-center">Password</th>
      </tr>
    </thead>
    <?php
      include_once "../uconfig/uconfig.php";
      $sql="SELECT * from registration";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <!-- <td><?=$count?></td> -->
      <td><?=$row["FirstName"]?></td>
      <td><?=$row["LastName"]?></td>
      <td><?=$row["Email"]?></td>
      <td><?=$row["MobileNumber"]?></td>
      <td><?=$row["Password"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>