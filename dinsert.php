<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:doctor.login.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/dinsert_style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />

  <title> Insert </title>
</head>
<body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

  <div class="top_img"><img src="Resource/land2.png"></div>
  <div class="navigation-bar" style="text-align: center">
    <a href="ddashboard.php" >Home</a>
    <a href="drecords.php">Records </a>
    <a href="dsearch.php">Search</a>
    <a href="dinsert.php">Insert</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>

  <script>
  jQuery(function($) {
      $("#date").datepicker();
  });
  </script>

  <script>
  jQuery(function($) {
      $("#time").timepicker({
        timeFormat: "hh:mm tt"
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
  }
  elseif (isset($_GET["login"])) {
      if ($_GET["login"]=="success") {
        echo "<div class='welcome' style='color: #97DC21'><h2 class='welcome_mssg'> Record Saved Successfully </h2></div>";
      }
    }
  elseif(!isset($_POST["choice-submit"])){
      echo "<div class='welcome'><h2 class='welcome_mssg'> Choose a Category</h2></div>
      <div class='choice_form_box'>
        <form class='choice_form' action='dinsert.php' method='post'>
          <label for='ch'>Consultation</label>
          <input type='checkbox' name='ch' value='1'><br>
          <label for='ch'>Surgery</label>
          <input type='checkbox' name='ch' value='2'><br>
          <label for='ch'>Diagnosis</label>
          <input type='checkbox' name='ch' value='3'><br>
          <input type='submit' name='choice-submit' value='NEXT'>
        </form>
      </div>";
    }

    else {
      if ($_POST["ch"]=="1") {
        echo "<div class='welcome'><h2 class='welcome_mssg'> Consultation Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='dinsert_con.php' method='post'>
      <label for='pssn'>Patient ID</label>
      <input type='text' name='pssn' placeholder='Enter a valid Patient ID' required><br>

      <label for='date'>Date</label>
      <input type='text' name='date' id='date' placeholder='Enter Date' required><br>


      <label for='time'>Time</label>
      <input type='text' name='time' id='time' placeholder='Enter Time' required><br>


      <label for='complains'>Complains</label>
      <textarea name='complains' placeholder='Write complains' required ></textarea><br>

      <label for='findings'>Findings</label>
      <textarea name='findings' placeholder='Write findings' required></textarea><br>

      <label for='treatments'>Treatments</label>
      <textarea name='treatments' placeholder='Treatments if any'></textarea><br>

      <label for='meds'>Medicines</label>
      <textarea name='meds' placeholder='Medicines if any'></textarea><br>

      <label for='allerigies'>Allergies</label>
      <textarea name='allergies' placeholder='Allergies if any'></textarea><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }
      elseif ($_POST["ch"]=="2") {
          echo "  <div class='welcome'><h2 class='welcome_mssg'> Surgery Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='dinsert_sur.php' method='post'>
      <label for='pssn'>Patient ID</label>
      <input type='text' name='pssn' placeholder='Enter a valid Patient ID' required><br>

      <label for='date'>Date</label>
      <input type='text' name='date' id='date' placeholder='Enter Date' required><br>

      <label for='time'>Time</label>
      <input type='text' name='time' id='time' placeholder='Enter Time' required><br>

      <label for='description'>Description</label>
      <textarea name='description' placeholder='Surgery Description' required ></textarea><br>

      <label for='complication'>Complications</label>
      <textarea name='complication' placeholder='Surgery Complications'></textarea><br>

      <label for='allerigies'>Allergies</label>
      <textarea name='allergies' placeholder='Allergies if any'></textarea><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }

      elseif ($_POST["ch"]=="3") {
        echo "  <div class='welcome'><h2 class='welcome_mssg'> Diagnosis Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='dinsert_diag.php' method='post'>
      <label for='pssn'>Patient ID</label>
      <input type='text' name='pssn' placeholder='Enter a valid Patient ID' required><br>

      <label for='date'>Date</label>
      <input type='text' name='date' id='date' placeholder='Enter Date' required><br>

      <label for='time'>Time</label>
      <input type='text' name='time' id='time' placeholder='Enter Time' required><br>

      <label for='diagname'>Diagnosis Name</label>
      <input type='text' name='diagname' placeholder='Diagnosis Name' required><br>

      <label for='description'>Description</label>
      <textarea name='description' placeholder='Diagnosis Description' required ></textarea><br>

      <label for='complication'>Complications</label>
      <textarea name='complication' placeholder='Diagnosis Complications if any'></textarea><br>

      <label for='allerigies'>Allergies</label>
      <textarea name='allergies' placeholder='Allergies if any'></textarea><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }
    }
 ?>



</body>
</html>
