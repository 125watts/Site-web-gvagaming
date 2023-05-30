<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'genevagaming');

if (isset($_SESSION['username'])) {

	$user = $_SESSION['username'];
	$admcheckqry = "SELECT * FROM usertable WHERE username = '$user' ";

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
	<title>A propos</title>
	<link rel="stylesheet" type="text/css" href="style_propos.css">
</head>
<body>
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

	<br>
	<div id="equipe_header">
	<h1>L'équipe</h1>
	<p>
	 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac est laoreet, faucibus justo id, rhoncus enim. Duis vitae felis et libero gravida mattis vitae non est. Sed fringilla luctus lorem sit amet molestie. Duis at laoreet lacus. Ut efficitur lacus sit amet erat auctor efficitur. Suspendisse vel quam tincidunt, sodales nulla in, blandit eros. Praesent risus tortor, posuere non tortor vitae, efficitur mattis ipsum. Morbi nec condimentum nisi. Donec sagittis erat rutrum, lobortis dui eu, commodo mauris.
	</p>
	</div>

	<img src="image_equipe.jpg">

	<div id="histoire_header">
	<h1>Notre histoire</h1>
	<h2>Un question de chance</h2>
	<p>
		Duis imperdiet aliquam maximus. Quisque ligula justo, tempus quis ultricies quis, pharetra a sapien. Curabitur viverra sit amet diam eu lacinia. Mauris tempus tristique magna, nec vestibulum elit blandit in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer porta lectus velit, ac pretium massa aliquet eu. Quisque in justo justo. Integer a urna ligula. Phasellus rutrum eu nunc volutpat volutpat. Quisque eget sollicitudin purus, at aliquet augue. Aenean varius, metus sed consequat commodo, nisl lectus tincidunt urna, sed pellentesque sem augue non erat. Aenean iaculis maximus nibh, nec posuere lorem ultrices non. Aliquam fermentum nisl eget risus lobortis, sed eleifend diam tristique. Morbi id ipsum turpis.
	</p>
	<h2>Un partage</h2>
	<p>
		Aliquam eu enim imperdiet, finibus nunc et, aliquet dui. Quisque ultrices eu mi et efficitur. Pellentesque congue ipsum et ex tempus, vitae finibus velit dictum. Mauris ipsum nunc, pellentesque nec purus eget, blandit volutpat justo. Ut ipsum purus, rhoncus ac aliquet at, ultrices vel eros. Etiam quis mi lacus. Cras venenatis ligula ac auctor eleifend. Fusce maximus tellus vel quam tincidunt pulvinar. Nullam facilisis pulvinar sapien. Etiam id est in mi scelerisque lacinia. 
	</p>
	</div>

	<div id="jeux_header">
	<h1>Les jeux</h1>
	<p>
		Aenean euismod turpis nec purus tempor convallis. Cras interdum, lectus eu auctor tincidunt, arcu purus elementum augue, sit amet ultricies justo sapien in tortor. Vestibulum elementum auctor turpis, non dictum quam elementum non. Ut id cursus nulla. Suspendisse consectetur pharetra odio, in rutrum nunc ultrices vitae. Quisque a quam hendrerit, consequat libero eu, ullamcorper nisi. Proin ornare egestas dolor id ultrices. 
	</p>
	</div>

</body>
</html>