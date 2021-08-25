<?php


$host="localhost";
$user="root";
$password="";
$database="leave_form";
$link=mysqli_connect($host, $user, $password, $database);
if($link){
	echo"connection established";
}
?>
