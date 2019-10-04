<?php
	function checkPassword($username, $password)
	{
		$connector = new PDO("mysql:host=localhost;dbname=customerdb","root","");
	
		$statement = $connector -> prepare("select * from admin
		where username = :username and password = SHA2(:password, 0)");
		$statement->bindValue(":username", $username);
		$statement->bindValue(":password", $password);
		$statement->execute();
		
		return $statement->rowCount() > 0;
	}
	
	if(isset($_POST["login"]))
	{
		if (checkPassword($_POST["surname"], $_POST["password"]))
		{
			session_start();
			$_SESSION["isAdmin"] = true;
			header("Location: http://localhost/PAW2018/Minggu06_KeamananAplikasi/private_web.php");
			exit();
		}
		
			
	}
?>	
<!DOCTYPE html>

<html>
	
	<body>
		<h2>Login</h2>
		<form name="formIsian" action="login.php" method="POST">
            <div>
                <label for="surname">Username:</label>
                <input type="text" name="surname" />
            </div>
			<div >
                <label for="password">Password :</label>
                <input type="password" name="password" />
            </div>
			<div >
                <label> &nbsp;</label>
                <input type="submit" name="login" value="Login">
            </div>
        </form>
	</body>
</html>