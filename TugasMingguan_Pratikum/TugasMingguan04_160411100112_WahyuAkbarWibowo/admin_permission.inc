<?php 
session_start();

$_SESSION["next_url"] = "http://".$_SERVER["HTTP_HOST"]."".$_SERVER["REQUEST_URI"];

if (!isset($_SESSION["isAdmin"])) 
{
	header("Location:http://localhost/PAW2018/TugasMingguan_Pratikum/TugasMingguan04_160411100112_WahyuAkbarWibowo/login.php");
	exit();
}
?>