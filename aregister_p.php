<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:admin.login.php");
  }

  if (isset($_POST["input-submit"])) {
   $pssn=$_POST["pssn"];
   $uid=$_SESSION['userID'];
   $fn=$_POST["fname"];
   $ln=$_POST["lname"];
   $adr=$_POST["adr"];
   $cno=$_POST["cno"];
   $mail=$_POST["mail"];
   $newdate=date_Create($_POST["dob"]);
   $dob=date_format($newdate,"Y-m-d");
   $gen=$_POST["gen"];
   $pass=$_POST["pass"];


    $sql="INSERT INTO patient (SSN, F_Name, L_Name, Address, Contact_No, Email, Date_Of_Birth, Gender)
       VALUES ('$pssn', '$fn', '$ln', '$adr', '$cno', '$mail','$dob','$gen')";

  $sqll="INSERT INTO patient_login (p_ssn, pass)
          VALUES ('$pssn', '$pass')";

    $is_inserted=mysqli_query($conn,$sql);
    $is_insertedd=mysqli_query($conn,$sqll);
    if($is_inserted && $is_insertedd){
      header("Location:aregister.php?login=success");
      exit();}
    else
    {
      header("Location:aregister.php?error=wronguser");
      exit();
    }
  }
  else {
    header("Location:aregister.php");
    exit();
  }

 ?>
