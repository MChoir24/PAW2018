	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="css/style.css" rel=stylesheet type="text/css" />
	<title>Halaman Utama</title>
</head>
<body>
	<div class="content">
		<div class="menu">
			<a href="private1.php"><div class="tab-menu">DETIL DATA 1</div></a>
			<a href="private2.php"><div class="tab-menu">DETIL DATA 2</div></a>
			<?php
				session_start();
				if (isset($_SESSION["isAdmin"])) {
					echo "<a href=\"logout.php\"><div class=\"tab-menu\">LOGOUT</div></a>";
				}
				else {
					echo "<a href=\"login.php\"><div class=\"tab-menu\">LOGIN</div></a>";
				}
			?>	
		</div>
		<div class="isi">
			
			<div class="foto"><img src="gambar/wahyuaw.jpg" alt="Foto Wahyu A.W." style="width: 150px; height: 200px;" /></div>
			<div class="row">
				<div class="column">Nama Lengkap</div>
				<div class="column">: Wahyu Akbar Wibowo</div>
			</div>
			<div class="row">
				<div class="column">NIM:</div>
				<div class="column">: 1604111000112</div>
			</div>
			<div class="row">
				<div class="column">Program Studi</div>
				<div class="column">: Teknik Informatika</div>
			</div>
			<div class="row">
				<div class="column">Fakultas</div>
				<div class="column">: Teknik</div>
			</div>
			<div class="row">
				<div class="column">Universitas</div>
				<div class="column">: Universitas Trunojoyo Madura</div>
			</div>
		</div>
	</div>
</body>
</html>