<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'genevagaming');

if (isset($_SESSION['username'])) {

	$user = $_SESSION['username'];
	$admcheckqry = "SELECT * FROM usertable WHERE username = '$user';";

	$isAdmin = 0;

	$run = $db-> query($admcheckqry);
	if ($run-> num_rows > 0) {
		while($row = $run->fetch_assoc()){
			$isAdmin = $row['isadmin'];
		}
	}

}	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'accueil - Geneva Gaming</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Menu gauche avec boutons -->
	<div id="barmenu">
	<ul>
		<li><a href="loginn.php">Compte</a></li>
		<li><a href="aPropos.php">A propos</a></li>
		<li><a href="essaieGGindex.php">Liste jeux</a></li>
		<li><a href="contact.php">Contact</a></li>
		<?php
			if (isset($_SESSION['username'])) {
				echo "<li><a href='deconnex.php'>Se déconnecter</a></li>";
			}
		?>
	</ul>
</div>

	<!-- Logo en haut à droite -->
	<div id="logodiv">
		<img src="logo.png">
	</div>


	<!-- Liste de jeux au centre -->
	<div id="tabjeu">
		<table>
			<tr>
				<th>N*</th>
				<th>Nom du jeu</th>
				<th>Prix en CHF</th>
				<th>Langue du jeu</th>
				<?php

				if (isset($_SESSION['username'])) {
					echo "<th>Opération</th>";
				}

				?>
			</tr>
			<!-- Code php pour prendre et afficher les données de gametable -->
			<tr>
				<?php
					$i = 1;
					$qry = "SELECT * FROM gametable";
					$run = $db -> query($qry);

					if ($run -> num_rows > 0) {
						while ($row = $run -> fetch_assoc()) {
							$id = $row['game_id'];
						
					
				?>
			</tr>
			<td><?php echo $id ?></td>
			<td><?php echo $row['game_name'] ?></td>
			<td><?php echo $row['game_price'] ?></td>
			<td><?php echo $row['game_lang'] ?></td>

				<?php

				if (isset($_SESSION['username'])) {
					if ($isAdmin == 1) {

						?>
						<td><a href="modifiar.php?id=<?php echo $id; ?>" onclick="return confirm('Etes-vous sur?')">Modifier</a>
							<a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Etes-vous sur?')">Supprimer</a>
						</td>

					<?php
					} else {
						echo '<td><a href="louer.php?id=<?php echo $id; ?>" onclick="return confirm("Etes-vous sur?")">Louer</a></td>';
					}
				}

				?>
		</tr>

		<?php
	}
}

?>

		</table>
	</div>



	<!-- Tableau pour employé (ajouter un jeu) !-->
	<?php

		if (isset($_SESSION['username'])) {

			if ($isAdmin == 1) {

	?>

				<div id="ajouter_tab">
				<h1>Tableau pr ajouter un jeu</h1>
	<form method="POST" action="add_game.php">
		<label>Nom du jeu</label>
		<input type="text" name="juego_name" placeholder="Entrez le nom du jeu">
		<br><br>
		<label>Prix en CHF.-</label>
		<input type="text" name="captain_price" placeholder="Entrez le prix du jeu">
		<br><br>
		<label>Langue du jeu</label>
		<input type="text" name="juega_lang" placeholder="Entrez la langue du jeu">
		<br><br>
		<input type="submit" name="submit" value="valider">
	</form>
	</div>


	<?php

			}
		}

		?>


</body>
</html>