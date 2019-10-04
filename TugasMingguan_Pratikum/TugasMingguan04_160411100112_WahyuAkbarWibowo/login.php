<?php
	
	session_start();
	if (@$_SESSION["isAdmin"] == true) {
		header("Location: index.php");
	}

	function validasi_login($username, $password)
	{
		$connector = new PDO("mysql:host=localhost;dbname=myapp","root","");
	
		$statement = $connector -> prepare("select * from admins
		where username = :username and password = SHA2(:password, 0)");
		$statement->bindValue(":username", $username);
		$statement->bindValue(":password", $password);
		$statement->execute();
		
		return $statement->rowCount() > 0;
	}
	
	if(isset($_POST["login"]))
	{
		if (validasi_login($_POST["username"], $_POST["password"]))
		{
			$_SESSION["isAdmin"] = true;
			header("Location: ".$_SESSION["next_url"]);
			exit();
		}
		
			
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="css/style.css" rel=stylesheet type="text/css" />
	<title>Login</title>

</head>
<body>
	<div class="content">
		<form method="POST" action="login.php" name="fomrLogin">
			<div class="isi">
				<div class="row">
					<div class="column"><label for="username">Username</label></div>
					<div class="column"><input type="text" name="username" id="username" /></div>
				</div>
				<div class="row">
					<div class="column"><label for="password">Password</label></div>
					<div class="column"><input type="password" name="password" id="password" /></div>
				</div>
				<div class="row">
					<div class="column"><label for="login">&nbsp;</label></div>
					<div class="column"><input type="submit" name="login" id="login" value="login"></div>
				</div>
			</div>
		</form>
	</div>

</body>
</html>