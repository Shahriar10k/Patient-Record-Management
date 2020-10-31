
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/hsstyle.css">
	<title> Welcome to NMR</title>

</head>

<body>
<div class="navigation-bar">
 <img src="Resource/land.png" alt="logo">
  <?php
    session_start();
    if(isset($_SESSION["userID"]) && $_SESSION["uc"]=="1")
    {
      echo "<a href='logout.php'>Logout</a>
      <a href='pdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
      echo "<a href='logout.php'>Logout</a>
      <a href='ddashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="3") {
      echo "<a href='logout.php'>Logout</a>
      <a href='sdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    else {
      echo " <div class='dropdown'>
    <button class='dropbtn'> Login <i class='fa fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      <a href='patient.login.php'>Patient Login</a>
      <a href='doctor.login.php'>Doctor Login</a>
      <a href='staff.login.php'>Staff Login</a>
    </div>
  </div>
  <a href='join.php'>Join</a>
  <a href='about.php'>About </a>
  <a href='index.php'> Home</a>";
    }
   ?>
</div>

<div class="intro">
 <img src="Resource/B.jpg">
 <div class="intro_write">
  <h1 class="intro_head"> Welcome To National Medical Registry</h1><br>
  <p>...One Place For All Your Medical Information <a href="about.php" style="color: black; font-family: 'Nunito', sans-serif; font-size: 20px"> Learn More </a></p>
  </div>
</div>

<div class="patient_intro">
  <div class="patient_intro_img">
    <img src="Resource/C.jpg">
    </div>
  <div class="patient_intro_header">
   <div class="patient_intro_header_text_box">
    <h2>As a patient Discover all your Consultation, Surgery and Diagnosis details in One place</h2>
   </div>
  </div>
  <a class="patient_intro_gs" href="patient.login.php">Get Started</a>
</div>

<div class="doctor_intro">
  <div class="doctor_intro_img">
    <img src="Resource/D.jpg">
  </div>
  <div class="doctor_intro_header">
    <div class="doctor_intro_header_text_box">
      <h2>As a Doctor, You Can Easily Record Patient Information And retrieve Previous Medical history</h2>
    </div>
  </div>
  <a class="doctor_intro_gs" href="doctor.login.php">Get Started</a>
</div>

<div class="staff_intro">
  <div class="staff_intro_img">
    <img src="Resource/E.jpg">
    </div>
  <div class="staff_intro_header">
   <div class="staff_intro_header_text_box">
    <h2>As a Nurse Or Emergency Response Team Member you can log Patient Information For Easy evaluation</h2>
   </div>
  </div>
  <a class="staff_intro_gs" href="staff.login.php">Get Started</a>
</div>

<div class="footer">
  <a href="http://radio.garden">  <p> Designed By Shahriar Khan</p></a>
</div>



</body>
</html>
