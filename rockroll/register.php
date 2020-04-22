<?php 
require 'connect.php';

$name = $_REQUEST["name"];
$username = $_REQUEST["username"];
$pass = hash("sha256",$_REQUEST["pass"]);
$mobile = $_REQUEST["mobile"];
$gender = $_REQUEST["gender"];
$address = $_REQUEST["address"];

$q1 = "insert into register values('$name','$username','$pass','$mobile','$gender','$address')";
//echo $pass;
if($con->query($q1))
{
	echo "Registered Successfully";
}
else
{
	echo "Not Registered";
}
?>