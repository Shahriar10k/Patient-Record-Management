<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:admin.login.php");
  }

  if (isset($_POST["input-submit"])) {
   $dssn=$_POST["dssn"];
   $uid=$_SESSION['userID'];
   $fn=$_POST["fname"];
   $ln=$_POST["lname"];
   $hid=$_POST["hid"];
   $adr=$_POST["adr"];
   $cno=$_POST["cno"];
   $mail=$_POST["mail"];
   $dep=$_POST["dep"];
   $spec=$_POST["spec"];
   $desg=$_POST["desg"];
   $pass=$_POST["pass"];


    $sql="INSERT INTO doctor (SSN, F_Name, L_Name, Hospital_ID, Address, Contact_No, Email, Department, Speciality, Designation)
        VALUES ('$dssn', '$fn', '$ln','$hid', '$adr', '$cno', '$mail','$dep','$spec','$desg')";

  $sqll="INSERT INTO doctor_login (d_ssn, pass)
          VALUES ('$dssn', '$pass')";

    $is_inserted=mysqli_query($conn,$sql);
    $is_insertedd=mysqli_query($conn,$sqll);
    if($is_inserted && $is_insertedd){
      header("Location:aregister.php?login=success");
      exit();}
    else
    {
      header("Location:aregister.php?error=wronghid");
      exit();
    }
  }
  else {
    header("Location:aregister.php");
    exit();
  }

 ?>
