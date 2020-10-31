<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:doctor.login.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
    <link rel="manifest" href="Resource/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="css/drecords_style.css">



    <title>Records</title>
  </head>
  <body>


    <div class="top_img"><img src="Resource/land2.png"></div>
    <div class="navigation-bar" style="text-align: center">
      <a href="sdashboard.php" >Home</a>
      <a href="srecords.php">Records </a>
      <a href="sinsert.php">Insert</a>
      <a class='logout' href="logout.php">Logout</a>
    </div>

    <?php
      require "connection.php";

      $uid=$_SESSION["userID"];


      $sql="SELECT CONCAT(p.SSN,d.SSN,DATE_FORMAT(c.Date_Time,'%Y%m%d%s%i%k')) AS Reference, DATE_FORMAT(c.Date_Time,'%M %D %Y %r') AS Date_Time, CONCAT(p.F_Name,' ',p.L_Name) AS patient_fullname,Patient_SSN, c.Description, c.Complication,c.Medicine, c.Allergies FROM medical_adminstration c,patient p, medical_staff d WHERE Staff_SSN=? AND p.SSN=Patient_SSN AND Staff_SSN=d.SSN";
      $stmt= mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location:drecords.php?error=sqlerror");
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $uid);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result)>0)
        {
          echo "<div class='welcome'><h2 class='mssg'> Medical Dosage Records </h2></div>
          <div class='table_box'>
            <table class='content-table'>
              <thead>
              <tr>
              <th>Date & Time</th>
              <th>Patient Name</th>
              <th>Patient ID</th>
              <th>Description</th>
              <th>Complications</th>
              <th>Medicine</th>
              <th>Allergies</th>
              <th>Reference No</th>
              </tr>
              </thead>

          ";

        while ($row = mysqli_fetch_assoc($result)) {
          $ref=$row["Reference"];
          $dt=$row["Date_Time"];
          $dfullname=$row["patient_fullname"];
          $desc=$row["Description"];
          $compl=$row["Complication"];
          $med=$row["Medicine"];
          $alg=$row["Allergies"];
          $dssn=$row["Patient_SSN"];

          echo "
          <tbody>
          <tr>
            <td>$dt</td>
            <td>$dfullname</td>
            <td>$dssn</td>
            <td>$desc</td>
            <td>$compl</td>
            <td>$med</td>
            <td>$alg</td>
            <td>$ref</td>
          </tr>
          ";

        }
        echo "</tbody></table>

        </div>";
        }
        elseif (mysqli_num_rows($result)==0) {
          echo "<div class='welcome'><h2 class='mssg'> No Medical Dosage Records Found </h2></div>";
        }
      }
      ?>


    <div class="footer">
    </div>
  </body>
</html>
