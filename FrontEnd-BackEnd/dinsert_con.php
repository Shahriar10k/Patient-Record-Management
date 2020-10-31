<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:doctor.login.php");
  }

  if (isset($_POST["input-submit"])) {
   $pssn=$_POST["pssn"];
   $uid=$_SESSION['userID'];
   $newdate=date_Create($_POST["date"]);
   $date=date_format($newdate,"Y-m-d");
   $newtime=date_Create($_POST["time"]);
   $time=date_format($newtime,"H:i:s");
   $datetime=$date." ".$time;
   $comp=$_POST["complains"];
   $find=$_POST["findings"];
   $treat=$_POST["treatments"];
   $meds=$_POST["meds"];
   $alg=$_POST["allergies"];

    $sql="INSERT INTO consultation (Patient_SSN, Doctor_SSN, Date_Time,
       Complains, Findings, Treatments, Medicines, Allergies)
       VALUES ('$pssn', '$uid', '$datetime',
         '$comp', '$find',
          '$treat', '$meds','$alg')";
    $is_inserted=mysqli_query($conn,$sql);
    if($is_inserted){
      header("Location:dinsert.php?login=success");
      exit();}
    else
    {
      header("Location:dinsert.php?error=wronguser");
      exit();
    }
  }
  else {
    header("Location:dinsert.php");
    exit();
  }

 ?>
