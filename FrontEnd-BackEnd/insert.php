<?php
 require "connection.php";

if($_POST)
{
$pssn=$_POST["P_SSN"];
$dssn=$_POST["D_SSN"];
$datetime=$_POST["C_date_time"];
$complains=$_POST["Complains"];
$Findings=$_POST["Findings"];
$Treatments=$_POST["Treatments"];
$Medicines=$_POST["Medicines"];
$Allergies=$_POST["Allergies"];

$is_insert=mysqli_query($conn,
"INSERT INTO `consultation`
(`Patient_SSN`, `Doctor_SSN`, `Date_Time`,
   `Complains`, `Findings`, `Treatments`,
   `Medicines`, `Allergies`)
   VALUES ('$pssn', '$dssn', '$datetime',
     '$complains', '$Findings',
      '$Treatments', '$Medicines','$Allergies')");
if($is_insert)
echo "Consultation form is recorded successfully!";
else
echo "Error 404";

}
?>
