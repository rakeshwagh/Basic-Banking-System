<?php
$servername="localhost";
$username="root";
$password="";
$dbname="banking_system";
//Create connection
$conn=new mysqli($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error)
{
	die("Unable to connect ".$conn->connect_error);
}
?>
