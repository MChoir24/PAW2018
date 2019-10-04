<?php 
	session_start();
	unset($_SESSION["isAdmin"]);
    header("Location: http://localhost/PAW2018/Minggu06_KeamananAplikasi/login.php");
?>