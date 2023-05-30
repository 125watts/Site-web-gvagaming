<?php

	$db = mysqli_connect('localhost', 'employe', 'pa$$word123', 'genevagaming');

	if (!$db) {
		die('error in db'. mysqli_error($db));
	}
	$id = $_GET['id'];

	$query = "DELETE FROM gametable WHERE game_id = $id";
	if (mysqli_query($db, $query)) {
		echo "Jeu supprimé avec succès";
		header('Location: essaieGGindex.php');
	} else {
		echo mysqli_error($db);
	}

?>