<?php
session_start();
if (!$_SESSION["loggued_on_user"])
	header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Food World</title>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<script>
		function confirm_del(){
			confirm("Etes-vous sur de vouloir supprimer votre compe ?");
		}
	</script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Food World</a></h1>
		</div>
		<div id="form">
			Votre compte
		</div>
	</div>
	<div id="main">
		<div id="panel"></div>
		<div id="content">
			<div id="about">
				<h2>Détails du compte</h2>
				<p>Votre identifiant: <?php session_start(); echo $_SESSION["loggued_on_user"]  ?>   <br>
				<form action="modif.php" method="post">
					Confirmer Identifiant:
					<input id="identifiant" ype="text" name="login">
					<br>
					Ancien mot de passe:
					<input id="identifiant2" type="password" name="oldpw">
					<br>
					Nouveau mot de passe:
					<input type="password" name="newpw"><br/><br/>
					<input type="submit" name="submit" value="Changer votre mot de passe">
					<button type="submit" name ="submit" value="delete" >Supprimer votre compte</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
