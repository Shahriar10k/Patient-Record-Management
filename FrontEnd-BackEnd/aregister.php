<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:admin.login.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/aregister_style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />

  <title> Register </title>
</head>
<body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

  <div class="top_img"><img src="Resource/land2.png"></div>
  <div class="navigation-bar" style="text-align: center">
    <a href="admin_panel.php" >Home</a>
    <a href="aregister.php">Register</a>
    <a href="adelete.php">Delete</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>

  <script>
  jQuery(function($) {
      $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange:"1920:2020"
    });
  });
  </script>

  <?php
  if (isset($_GET["error"]))
   {
    if($_GET["error"]=="wronguser")
    {
      echo "<div class='welcome' style='color: #D61A3C'><h2 class='welcome_mssg'> Wrong Patient ID </h2></div>";
    }
    elseif ($_GET["error"]=="wronghid") {
      echo "<div class='welcome' style='color: #D61A3C'><h2 class='welcome_mssg'> Wrong Hospital ID </h2></div>";
    }
  }
  elseif (isset($_GET["login"])) {
      if ($_GET["login"]=="success") {
        echo "<div class='welcome' style='color: #97DC21'><h2 class='welcome_mssg'> Registration Successful </h2></div>";
      }
    }
  elseif(!isset($_POST["choice-submit"])){
      echo "<div class='welcome'><h2 class='welcome_mssg'> Choose a Category</h2></div>
      <div class='choice_form_box'>
        <form class='choice_form' action='aregister.php' method='post'>
          <label for='ch'>Patient</label>
          <input type='checkbox' name='ch' value='1'><br>
          <label for='ch'>Doctor</label>
          <input type='checkbox' name='ch' value='2'><br>
          <label for='ch'>Staff</label>
          <input type='checkbox' name='ch' value='3'><br>
          <label for='ch'>Hospital</label>
          <input type='checkbox' name='ch' value='4'><br>
          <input type='submit' name='choice-submit' value='NEXT'>
        </form>
      </div>";
    }

    else {
      if ($_POST["ch"]=="1") {
        echo "<div class='welcome'><h2 class='welcome_mssg'> Patient Registration Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='aregister_p.php' method='post'>
      <label for='pssn'>Patient ID</label>
      <input type='text' name='pssn' placeholder='Enter a valid Patient ID' required><br>

      <label for='fname'>First Name</label>
      <input type='text' name='fname' placeholder='Enter First Name' required><br>


      <label for='lname'>Last Name</label>
      <input type='text' name='lname' placeholder='Enter Last Name' required><br>


      <label for='adr'>Address</label>
      <input type='text' name='adr' placeholder='Current Address' required ><br>

      <label for='cno'>Contact No.</label>
      <input type='text' name='cno' placeholder='Contact No.' required><br>

      <label for='mail'>Email</label>
      <input type='text' name='mail' placeholder='Email' required;><br>

      <label for='dob'>Date of Birth</label>
      <input type='text' name='dob' id='dob' placeholder='Date of birth' required><br>

      <label for='gen'>Gender</label>
      <input type='text' name='gen' placeholder='Gender' required><br>

      <label for='pass'>Password</label>
      <input type='text' name='pass' placeholder='Password' required><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }
      elseif ($_POST["ch"]=="2") {
          echo " <div class='welcome'><h2 class='welcome_mssg'> Doctor Registration Form</h2></div>
    <div class='input-form-box'>
      <form class='input-form' action='aregister_d.php' method='post'>
        <label for='dssn'>Doctor ID</label>
        <input type='text' name='dssn' placeholder='Enter a valid Doctor ID' required><br>

        <label for='fname'>First Name</label>
        <input type='text' name='fname' placeholder='Enter First Name' required><br>


        <label for='lname'>Last Name</label>
        <input type='text' name='lname' placeholder='Enter Last Name' required><br>

        <label for='hid'>Hospital ID</label>
        <input type='text' name='hid' placeholder='Hospital ID' required ><br>

        <label for='adr'>Address</label>
        <input type='text' name='adr' placeholder='Current Address' required ><br>

        <label for='cno'>Contact No.</label>
        <input type='text' name='cno' placeholder='Contact No.' required><br>

        <label for='mail'>Email</label>
        <input type='text' name='mail' placeholder='Email' required><br>

        <label for='dep'>Department</label>
        <input type='text' name='dep' placeholder='Department' required><br>

        <label for='spec'>Speciality</label>
        <input type='text' name='spec' placeholder='Specialization' required><br>

        <label for='desg'>Designation</label>
        <input type='text' name='desg' placeholder='Designation' required><br>

        <label for='desg'>Password</label>
        <input type='text' name='pass' placeholder='Password' required><br>

        <input type='submit' name='input-submit' value='Save'>
      </form>

    </div>";
      }

      elseif ($_POST["ch"]=="3") {
        echo "  <div class='welcome'><h2 class='welcome_mssg'> Staff Registration Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='aregister_s.php' method='post'>
      <label for='sssn'>Staff ID</label>
      <input type='text' name='sssn' placeholder='Enter a valid Staff ID' required><br>

      <label for='fname'>First Name</label>
      <input type='text' name='fname' placeholder='Enter First Name' required><br>


      <label for='lname'>Last Name</label>
      <input type='text' name='lname' placeholder='Enter Last Name' required><br>

      <label for='hid'>Hospital ID</label>
      <input type='text' name='hid' placeholder='Hospital ID' required ><br>

      <label for='adr'>Address</label>
      <input type='text' name='adr' placeholder='Current Address' required ><br>

      <label for='cno'>Contact No.</label>
      <input type='text' name='cno' placeholder='Contact No.' required><br>

      <label for='mail'>Email</label>
      <input type='text' name='mail' placeholder='Email' required><br>

      <label for='dep'>Department</label>
      <input type='text' name='dep' placeholder='Department' required><br>

      <label for='desg'>Designation</label>
      <input type='text' name='desg' placeholder='Designation' required><br>

      <label for='desg'>Password</label>
      <input type='text' name='pass' placeholder='Password' required><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }

    elseif ($_POST["ch"]=="4") {
      echo "  <div class='welcome'><h2 class='welcome_mssg'> Hospital Registration Form</h2></div>
<div class='input-form-box'>
  <form class='input-form' action='aregister_h.php' method='post'>
    <label for='hid'>Hospital ID</label>
    <input type='text' name='hid' placeholder='Enter a Hospital ID' required><br>

    <label for='name'>Hospital Name</label>
    <input type='text' name='name' placeholder='Enter Hospital Name' required><br>

    <label for='adr'>Address</label>
    <input type='text' name='adr' placeholder='Hospital Address' required ><br>

    <label for='mail'>Email</label>
    <input type='text' name='mail' placeholder='Email' required><br>

    <input type='submit' name='input-submit' value='Save'>
  </form>

</div>";
    }


    }
 ?>



</body>
</html>
