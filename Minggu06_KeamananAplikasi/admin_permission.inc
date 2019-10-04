<?php 
session_start();
if (!isset($_SESSION["isAdmin"])) 
{
	header("Location:http://localhost/PAW2018/Minggu06_KeamananAplikasi/login.php");
	exit();
}
?>