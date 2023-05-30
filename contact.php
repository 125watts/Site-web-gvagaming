<?php

	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'genevagaming');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page de contact</title>
	<link rel="stylesheet" type="text/css" href="style_contact.css">
</head>
<body>



	<!-- bar menu !-->
	<div id="barmenu">
	<ul>
		<li><a href="loginn.php">Compte</a></li>
		<li><a href="aPropos.php">A propos</a></li>
		<li><a href="essaieGGindex.php">Liste jeux</a></li>
		<li><a href=#>Contact</a></li>
		<?php
			if (isset($_SESSION['username'])) {
				echo "<li><a href='deconnex.php'>Se déconnecter</a></li>";
			}
		?>
	</ul>
	</div>



	<!-- La page a proprement dite(Liens pour contact) !-->
	<h1>Comment nous contacter</h1>
	<h2>Bloc</h2>

	<div id="insta">
		<h2>Instagram @genevagamingch</h2>
		<a href="https://instagram.com/gvagamingch" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" title="Clique sur moi pour aller sur notre page insta"></a>
	</div>

	<div id="telephone">
		<h2>Téléphone : +41 420 666 969</h2>
		<img src="https://nerdist.com/wp-content/uploads/2018/02/the-matrix-phone.jpg">
	</div>

	<div id="mail">
		<h2><a href="mailto:contact@gvagaming.war">Mail : contact@gvagaming.war</a></h2>
		<img src="https://hereifiles244.weebly.com/uploads/1/1/9/5/119519525/864045485.jpg">
	</div>



	<!-- Code 4  !-->
	<div id="location">
	<h1>Notre localisation</h1>
		<h2>Ville : Genève</h2>
		<img src="map2gva.jpg">
		<h2>Adresse : rue de la serviette 342</h2>
	</div>

</body>
</html>