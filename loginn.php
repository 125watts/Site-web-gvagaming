<?php
	
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
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

	<table>
		<?php
			
			if (isset($_SESSION['username'])) {

		?>
		<div id="logged_in">
		<table>
		<tr>
			<td style="color: white;font-family: franklin gothic;">Hi vous etes already logged in.
			Veuillez cliquer sur le chat pour revenir à l'acceuil</td>
			<td><a href="essaieGGindex.php"><img src="happy_cat.jpg"></a></td>
		</tr>
		</table>
		</div>
		<?php

	} else {

		?>
		<tr>
		<div id="login_box">
			<form action="connexSion.php" method="POST">
				<legend>Login</legend><br><br>
				<label for="username">Username</label><br/>
				<input type="text" id="username" name="username" placeholder="Saisir votre nom d'utilisateur">
				<br/><br/>
				<label for="psswd">Password</label><br/>
				<input type="password" id="psswd" name="password" placeholder="Veuillez saisir votre mot de passe">
				<br/><br/>
				<input type="submit" value="Login" name="<?php echo $submitlogin; ?>">
				<p><a href="enregistrar.php">S'enregistrer</a></p>
			</form>
		</div>
		</tr>
		<?php

	}

	?>
	</table>
</body>
</html>

<?php

	if (isset($_POST['$submitlogin'])) {
		header("Location: connexSion.php");
	}

?>