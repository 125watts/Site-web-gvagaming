<?php

session_start();

$db = mysqli_connect('localhost', 'employe', 'pa$$word123', 'genevagaming');

$gamename = $_POST['juego_name'];
$gameprice = $_POST['captain_price'];
$gamelang = $_POST['juega_lang'];

$qryadd = "INSERT INTO gametable
VALUES ('null', '$gamename', '$gameprice', '$gamelang')";

if (mysqli_query($db, $qryadd)) {
	echo "Data ajoutée avec succès";
	header("Location: essaieGGindex.php");
} else {
	echo mysqli_error($db);
}

?>