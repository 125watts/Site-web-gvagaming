<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S'enregistrer</title>
	<link rel="stylesheet" href="enregistrar.css">
</head>
<body>

	<div id="barmenu">
	<ul>
		<li><a href="loginn.php">Compte</a></li>
		<li><a href="aPropos.php">A propos</a></li>
		<li><a href="essaieGGindex.php">Liste jeux</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	</div>

	<div id="register_box">
		<form method="POST" action="verifenregistrar.php">
			<legend>S'enregistrer</legend><br><br>
			<label for="username">Username</label><br/>
			<input type="text" id="username" name="username" placeholder="Saisir votre nom d'utilisateur">
			<br/><br/>
			<label for="psswd">Password</label><br/>
			<input type="password" id="psswd" name="password" placeholder="Veuillez saisir votre mot de passe">
			<br/><br/>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>