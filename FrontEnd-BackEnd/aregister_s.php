<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:admin.login.php");
  }

  if (isset($_POST["input-submit"])) {
   $sssn=$_POST["sssn"];
   $uid=$_SESSION['userID'];
   $fn=$_POST["fname"];
   $ln=$_POST["lname"];
   $hid=$_POST["hid"];
   $adr=$_POST["adr"];
   $cno=$_POST["cno"];
   $mail=$_POST["mail"];
   $dep=$_POST["dep"];
   $desg=$_POST["desg"];
   $pass=$_POST["pass"];


    $sql="INSERT INTO medical_staff (SSN, F_Name, L_Name, Hospital_ID, Address, Contact_No, Email, Department, Designation)
        VALUES ('$sssn', '$fn', '$ln','$hid', '$adr', '$cno', '$mail','$dep','$desg')";

  $sqll="INSERT INTO staff_login (s_ssn, pass)
          VALUES ('$sssn', '$pass')";

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
