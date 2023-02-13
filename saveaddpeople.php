<?php
require ("Connect.php");
$fname=$_POST["FName"];
$lname=$_POST["LName"];
$sex=$_POST["Sex"];
$marry_status=$_POST["MarryStatus"];
$age=$_POST["Age"];

//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="INSERT INTO survey(FName,LName,Age,Sex,MarryStatus)";
$sql.=" VALUES('$fname','$lname','$age','$sex','$marry_status')";
$conn->query($sql);
header( "location: list_people.php" );
?>