<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:staff.login.php");
  }

  if (isset($_POST["input-submit"])) {
   $pssn=$_POST["pssn"];
   $uid=$_SESSION['userID'];
   $newdate=date_Create($_POST["date"]);
   $date=date_format($newdate,"Y-m-d");
   $newtime=date_Create($_POST["time"]);
   $time=date_format($newtime,"H:i:s");
   $datetime=$date." ".$time;
   $comp=$_POST["comp"];
   $desc=$_POST["desc"];
   $meds=$_POST["meds"];
   $alg=$_POST["allergies"];

    $sql="INSERT INTO medical_adminstration (Patient_SSN, Staff_SSN, Date_Time,
       Description, Complication, Medicine, Allergies)
       VALUES ('$pssn', '$uid', '$datetime',
         '$desc','$comp','$meds','$alg')";
    $is_inserted=mysqli_query($conn,$sql);
    if($is_inserted){
      header("Location:sinsert.php?login=success");
      exit();}
    else
    {
      header("Location:sinsert.php?error=wronguser");
      exit();
    }
  }
  else {
    header("Location:sinsert.php");
    exit();
  }

 ?>
