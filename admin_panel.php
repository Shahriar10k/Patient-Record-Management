<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:admin.login.php?signin");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/ddash_style.css">
  <title> Dashboard </title>
</head>
<body>
  <div class="top_img"><img src="Resource/land2.png"></div>
  <div class="navigation-bar" style="text-align: center">
    <a href="admin_panel.php" >Home</a>
    <a href="aregister.php">Register</a>
    <a href="adelete.php">Delete</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>






</body>
</html>
