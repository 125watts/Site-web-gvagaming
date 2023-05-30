<?php

	session_start();
	$db = mysqli_connect('localhost', 'employe', 'pa$$word123', 'genevagaming');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier données</title>
</head>
<body>
	<form style="border: 1px; width: 80px;" method="POST">
		<label>Nom du jeu</label>
		<input type="text" name="nom2jeu">
		<br><br>
		<label>Prix du jeu</label>
		<input type="text" name="prix2jeu">
		<br><br>
		<label>Langue du jeu</label>
		<input type="text" name="langue2jeu">
		<br><br>
		<input type="submit" name="submit" value="valider">
	</form>
</body>
</html>

<?php

	if (isset($_POST['submit'])) {

		$gamename = $_POST['nom2jeu'];
		$gameprice = $_POST['prix2jeu'];
		$gamelang = $_POST['langue2jeu'];
		$idd = $_GET['id'];

		$query = "update gametable set game_name = '$gamename', game_price = '$gameprice', game_lang = '$gamelang' where game_id = '$idd';";

		if (mysqli_query($db, $query)) {
			echo "Data modifiée avec succès succincte";
			header("Refresh:2");
			header("Location: essaieGGindex.php");
		} else {
			echo mysqli_error($db);
		}
	}

?>