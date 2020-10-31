<?php
 if (isset($_POST["login-submit"])) {
   require "connection.php";

   $uid=$_POST["userID"];
   $pswd=$_POST["pass"];

   if(empty($uid) || empty($pswd))
   {
     header("Location:doctor.login.php?error=emptyfields");
     exit;
   }
   else {
     $sql = "SELECT * FROM `doctor_login` WHERE d_ssn=?";
     $stmt= mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt,$sql)) {
       header("Location:doctor.login.php?error=sqlerror");
     }
     else {
       mysqli_stmt_bind_param($stmt, "s", $uid);
       mysqli_stmt_execute($stmt);
       $result= mysqli_stmt_get_result($stmt);
       if ($row = mysqli_fetch_assoc($result)) {
         {
           if($pswd !== $row["pass"]){
                header("Location:doctor.login.php?error=wrongpass");
                exit();
                  }
          else if ($pswd == $row["pass"]) {
            session_start();
            $_SESSION["userID"] = $row["d_ssn"];
            $_SESSION["uc"]="2";
            header("Location:ddashboard.php");
            exit();
          }
          else {
            header("Location:doctor.login.php?error=wrongpass");
            exit();
          }
         }
       }
       else {
         header("Location:doctor.login.php?error=nouser");
         exit();
       }
     }
   }
 }
 else{
   header("Location:index.php");
   exit();
 }
 ?>
