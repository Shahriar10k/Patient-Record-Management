<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:staff.login.php");
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
     <a href="sdashboard.php" >Home</a>
     <a href="srecords.php">Records </a>
     <a href="sinsert.php">Insert</a>
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
   else{
     echo "<div class='welcome'><h2 class='welcome_mssg'> Medicine Dosage Form</h2></div>
<div class='input-form-box'>
 <form class='input-form' action='sinsert_con.php' method='post'>
   <label for='pssn'>Patient ID</label>
   <input type='text' name='pssn' placeholder='Enter a valid Patient ID' required><br>

   <label for='date'>Date</label>
   <input type='text' name='date' id='date' placeholder='Enter Date' required><br>


   <label for='time'>Time</label>
   <input type='text' name='time' id='time' placeholder='Enter Time' required><br>


   <label for='desc'>Description</label>
   <textarea name='desc' placeholder='Description' required ></textarea><br>

   <label for='comp'>Complications</label>
   <textarea name='comp' placeholder='Write Complications if any'></textarea><br>

   <label for='meds'>Medicines</label>
   <textarea name='meds' placeholder='Medicines if any'></textarea><br>

   <label for='allerigies'>Allergies</label>
   <textarea name='allergies' placeholder='Allergies if any'></textarea><br>

   <input type='submit' name='input-submit' value='Save'>
 </form>

</div>";

   }
  ?>




 </body>
 </html>
