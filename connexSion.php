<?php

//Récupération des données
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//Connexion à la BDD
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "genevagaming";
$connect = mysqli_connect($servername, $db_username, $db_password, $db_name);

//Vérifier la connexion
if (!$connect) {
	die("Connexion échouée : ".mysqli_connect_error());
}

//Vörifier les informations d'identification
$qry = "SELECT * FROM usertable WHERE username='$username' AND userpassword='$password' ";
$resultat = mysqli_query($connect ,$qry);

if (mysqli_num_rows($resultat) == 1) {
	$_SESSION['username'] = $username;
	header("Location: essaieGGindex.php");
} else {
	echo "Nom d'utilisateur ou mot de passe incorrect";
	header("Refresh:2;url = loginn.php");
}
?>