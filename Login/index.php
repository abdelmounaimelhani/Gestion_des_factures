<?php
include_once "../App/Connexion.php";
session_start();
if (isset($_SESSION["conn"])) {
	header("location:http://localhost/Azrou-Sani/App/");
}
if (isset($_POST["submit"])&&isset($_POST["Email"])&&isset($_POST["Pass"])) {
	$pass=$_POST["Pass"];
	$Email=$_POST["Email"];
	$st=$pdo->prepare("SELECT * FROM admins WHERE email=? AND pass=?");
	$st->bindParam(1,$Email);
	$st->bindParam(2,$pass);
	$st->execute();
	$res = $st->fetchAll(PDO::FETCH_OBJ);
	if (count($res)>0) {
		$_SESSION["conn"]=true;
		header("location:http://localhost/Azrou-Sani/App/");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Connexion</title>
</head>
<body>
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" method="post">
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input name="Email" type="text" class="login__input" placeholder="Email">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input name="Pass" type="password" class="login__input" placeholder="Mot de pass">
					</div>
					<button name="submit" class="button login__submit">
						<span class="button__text">Connexion</span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>				
				</form>
				
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>		
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>		
		</div>
	</div>
</body>
</html>