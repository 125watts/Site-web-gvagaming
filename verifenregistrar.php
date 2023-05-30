<?php

	$db = mysqli_connect('localhost', 'root', '', 'genevagaming');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$qry = "INSERT INTO usertable VALUES ('null', '$username', '$password', 0);";

	if (!$db) {
		die("Connexion à la BDD échouée : ".mysqli_conect_error());
	}

	// Vérification que l'username donné n'est pas déja dans la bdd
	$check_username_qry = "SELECT * FROM usertable WHERE username = '$username';";
	$axio_check_username = mysqli_query($db,$check_username_qry);

?>

<?php

	if (mysqli_num_rows($axio_check_username) == 0) {
		$axio_inscrire = mysqli_query($db,$qry);
		echo "élément enregistré avec succès";
		header("Refresh:3");
		header("Location: loginn.php");
	} else {
		echo "Nom d'utilisateur déja utilisé";
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vérification des données d'enregistrement</title>
	</head>
	<body>
		<p><a href="enregistrar.php">Bouton pour revenir à la page précédente</a></p>
	</body>
	</html>
<?php
	}
?>