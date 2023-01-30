<?php
require ("Connect.php");

$id=$_POST["ID"];
$fname=$_POST["FName"];
$lname=$_POST["LName"];
$sex=$_POST["Sex"];
$marry_status=$_POST["MarryStatus"];

echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="UPDATE survey set FName='$fname',Lname='$lname',Age='$age',Sex='$sex',MarryStatus='$marry_status' WHERE ID=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>