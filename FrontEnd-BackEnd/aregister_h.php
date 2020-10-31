<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:admin.login.php");
  }

  if (isset($_POST["input-submit"])) {

   $n=$_POST["name"];
   $hid=$_POST["hid"];
   $adr=$_POST["adr"];
   $mail=$_POST["mail"];


    $sql="INSERT INTO hospital (ID, Email, Address, name)
        VALUES ('$hid', '$mail', '$adr', '$n')";


    $is_inserted=mysqli_query($conn,$sql);

    if($is_inserted){
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
