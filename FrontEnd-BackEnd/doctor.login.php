<?php
 session_start();
 if (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
   header("Location:ddashboard.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/dlogin_style.css">
  <title> Login </title>
</head>

<body style="background-image: url(Resource/G.jpg); background-size: cover;">


 <div class="login_box">
   <form class="login_form" action="doctor_login.process.php" method="post">
     <img src="Resource/logo.black.png">
     <h2>Sign In</h2>
     <?php
      if(isset($_GET["error"]))
      {
        if ($_GET["error"]=="emptyfields") {
          echo "<p class=login_error>Fill in all the fields</p>";
        }
        else if ($_GET["error"]=="wrongpass") {
          echo "<p class=login_error>Password does not match</p>";
        }
        else if ($_GET["error"]=="nouser") {
         echo "<p class=login_error>No User Found!</p>";
        }
      }
      else if (isset($_GET["login"])) {
         if ($_GET["login"]=="success") {
         echo "<p class=login_success>Login Succesful!</p>";
           }
      }
      ?>

     <label for="userID">User ID</label>
     <input type="text" name="userID" placeholder="Enter your SSN or NID number or Passport Number">
     <label for="pass">Password</label>
     <input type="password" name="pass" placeholder="Enter your Password">
     <input type="submit" name="login-submit" value="Login">
   </form>


   </div>
 </div>


 </div>


</body>
