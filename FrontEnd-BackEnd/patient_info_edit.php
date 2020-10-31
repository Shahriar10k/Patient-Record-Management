<?php
  session_start();
  if(!$_SESSION["userID"])
  header("Location:patient.login.php")
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
     <link rel="manifest" href="Resource/favicon/site.webmanifest">
     <link rel="stylesheet" type="text/css" href="css/pedit_style.css">
     <title>Edit</title>
   </head>
   <body>
     <div class="top_img"><img src="Resource/land2.png"></div>
     <div class="navigation-bar" style="text-align: center">
       <a href="pdashboard.php" >Home</a>
       <a href="precords.php">Records </a>
       <a href="psearch.php">Search</a>
       <a class='logout' href="logout.php">Logout</a>
     </div>
     <div class='welcome'><h2 class='welcome_mssg'>Contact Information Edit </h2></div>

     <div class="wrapper">
       <div class="container">
         <form class="ci_edit_form" action="patient_info_edit.php" method="post">


            <input type="text" name="ads" placeholder="Enter New Address"><br>


            <input type="text" name="ctc" placeholder="Enter New Contact Number"><br>


            <input type="text" name="mail" placeholder="Enter New Email">

            <input type="submit" name="info-submit" value="Save">
         </form>
       </div>
     </div>

     <?php
      require "connection.php";
      if(isset($_POST["info-submit"]))
      {
        if (!empty($_POST["ads"]) && !empty($_POST["ctc"]) && !empty($_POST["mail"])) {
            $uid=$_SESSION["userID"];
            $ads=$_POST["ads"]; $ctc=$_POST["ctc"]; $mail=$_POST["mail"];

            $sql="UPDATE patient SET Address = '$ads', Contact_No = '$ctc', Email = '$mail' WHERE patient.SSN = '$uid'";
            $is_updated=mysqli_query($conn,$sql);

            if($is_updated){
              echo "<p class='alert'>Information Updated Successfully</p>";
            }
            else {
              header("Location:patient_info_edit.php?Error");
            }
          }
      elseif (!empty($_POST["ads"]) && !empty($_POST["ctc"]) && empty($_POST["mail"])) {
        $uid=$_SESSION["userID"];
        $ads=$_POST["ads"]; $ctc=$_POST["ctc"];

        $sql="UPDATE patient SET Address = '$ads', Contact_No = '$ctc' WHERE patient.SSN = '$uid'";
        $is_updated=mysqli_query($conn,$sql);

        if($is_updated){
          echo "<p class='alert'>Information Updated Successfully</p>";
        }
        else {
          header("Location:patient_info_edit.php?Error");
        }
      }
    elseif (!empty($_POST["ads"]) && empty($_POST["ctc"]) && !empty($_POST["mail"])) {
      $uid=$_SESSION["userID"];
      $ads=$_POST["ads"];  $mail=$_POST["mail"];

      $sql="UPDATE patient SET Address = '$ads', Email = '$mail' WHERE patient.SSN = '$uid'";
      $is_updated=mysqli_query($conn,$sql);

      if($is_updated){
        echo "<p class='alert'>Information Updated Successfully</p>";
      }
      else {
        header("Location:patient_info_edit.php?Error");
      }
    }
    elseif (empty($_POST["ads"]) && !empty($_POST["ctc"]) && !empty($_POST["mail"])) {
      $uid=$_SESSION["userID"];
     $ctc=$_POST["ctc"]; $mail=$_POST["mail"];

      $sql="UPDATE patient SET Contact_No = '$ctc', Email = '$mail' WHERE patient.SSN = '$uid'";
      $is_updated=mysqli_query($conn,$sql);

      if($is_updated){
        echo "<p class='alert'>Information Updated Successfully</p>";
      }
      else {
        header("Location:patient_info_edit.php?Error");
      }
    }
    elseif (!empty($_POST["ads"]) && empty($_POST["ctc"]) && empty($_POST["mail"])) {
      $uid=$_SESSION["userID"];
      $ads=$_POST["ads"];

      $sql="UPDATE patient SET Address = '$ads' WHERE patient.SSN = '$uid'";
      $is_updated=mysqli_query($conn,$sql);

      if($is_updated){
        echo "<p class='alert'>Information Updated Successfully</p>";
      }
      else {
        header("Location:patient_info_edit.php?Error");
      }
    }
    elseif (empty($_POST["ads"]) && !empty($_POST["ctc"]) && empty($_POST["mail"])) {
      $uid=$_SESSION["userID"];
     $ctc=$_POST["ctc"];

      $sql="UPDATE patient SET  Contact_No = '$ctc' WHERE patient.SSN = '$uid'";
      $is_updated=mysqli_query($conn,$sql);

      if($is_updated){
        echo "<p class='alert'>Information Updated Successfully</p>";
      }
      else {
        header("Location:patient_info_edit.php?Error");
      }
    }

      elseif (empty($_POST["ads"]) && empty($_POST["ctc"]) && !empty($_POST["mail"])) {
        $uid=$_SESSION["userID"];
         $mail=$_POST["mail"];

        $sql="UPDATE patient SET  Email = '$mail' WHERE patient.SSN = '$uid'";
        $is_updated=mysqli_query($conn,$sql);

        if($is_updated){
          echo "<p class='alert'>Information Updated Successfully</p>";
        }
        else {
          header("Location:patient_info_edit.php?Error");
        }
      }

      }
      ?>

      <div class="footer"></div>
   </body>
 </html>
