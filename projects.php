<?php

	include "php/connection.php";

	$sql = "SELECT * FROM projecten";

	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="icon" href="img/icon.ico">
	<title>PF - Projects</title>
</head>
<body id="body">
	<div class="header">
		<img src="img/menu.png" class="menuIco" id="menuIco">
		<img src="img/logo.png" class="logo">
		<ul class="Dmenu">
			<li><a href="index.php">Home</a></li>
			<li><a href="projects.php">Projects</a></li>
		</ul>
	</div>
	<div class="menu" id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="projects.php">Projects</a></li>
		</ul>
	</div>
	<div class="projectContainer">
		<?php

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					?>
					<div class="project">
						<h1 class="pTitle"><?php echo $row["titel"]; ?></h1>
						<p class="description"><?php echo $row["descriptie"]; ?></p>
						<?php 
						echo "<img src=\"";
						echo $row["img"];
						echo "\" class=\"thumbnail\">";
						echo "<a href=\"";
						echo $row["link"];
						echo "\" class=\"moreBtn\" target=\"_blank\">More</a>";
						?>
					</div>
					<?php 
				}
			}

		?>
		<!-- <div class="project">
			<h1 class="pTitle">Meetstation</h1>
			<p class="description">Met dit project heb ik een station gemaakt met een arduino waarbij hij de luchtvochtigheid en de temperatuur meet en aangeeft. Ik heb het zo gedaan dat je via WiFi met de arduino kan verbinden en naar de site kan om de informatie te zien</p>
			<img src="img/weerstationThumb.jpg" class="thumbnail">
			<a href="https://github.com/Svenwiersema/Meetstation" class="moreBtn" target="_blank">More</a>
		</div>
		<div class="project">
			<h1 class="pTitle">De joker app</h1>
			<p class="description">Met dit project heb ik laten zien dat ik de basis van python goed ken. Het doel van de app is om verslaafden te helpen met het minder en/of uiteindelijk te stoppen met bijvoorbeeld het drugs gebruik.</p>
			<img src="img/jokersThumb.png" class="thumbnail">
			<a href="https://github.com/Svenwiersema/Jokers" class="moreBtn" target="_blank">More</a>
		</div>
		<div class="project">
			<h1 class="pTitle">De die game </h1>
			<p class="description">Dit is mijn tweede python project. Ik heb dit project gemaakt om een beetje te kijken wat je met python kan doen.</p>
			<img src="img/diegameThumb.png" class="thumbnail">
			<a href="https://github.com/Svenwiersema/Die-Game" class="moreBtn" target="_blank">More</a>
		</div>
		<div class="project">
			<h1 class="pTitle">De window checker app</h1>
			<p class="description">Dit is mijn eerste grote project dat ik op het REA College heb gekregen. Op het moment is het project nog niet af. Het doel van het project is om vanaf 1 plek te kunnen zien welke ramen openstaan en welke niet, zodat iemand niet het hele gebouw hoeft door te lopen om per raam te kijken. De applicatie is zo gemaakt dat het uitbreidbaar is voor meerdere functies zoals kijken voor lichten die aanstaan.</p>
			<img src="img/placeholder.png" class="thumbnail">
			<a href="https://github.com/Svenwiersema/WindowChecker" class="moreBtn" target="_blank">More</a>
		</div>
		<div class="project">
			<h1 class="pTitle">De kluis</h1>
			<p class="description">Dit is mijn eerste project wat ik heb gemaakt. Dit project heb ik gemaakt na aanleiding van mijn intake opdracht. Ik heb dit project bedacht en gemaakt om meer te leren over de arduino voordat ik met de opleiding ben begonnen. het project is digitaal helemaal uitgewerkt. Ik ben persoonlijk thuis bezig met het maken van de kluis en het inelkaar zetten.</p>
			<img src="img/vaultThumb.png" class="thumbnail">
			<a href="https://github.com/Svenwiersema/VaultProject" class="moreBtn" target="_blank">More</a>
		</div> -->
	</div>



	<div class="footer">
		<p>Made by Sven Wiersema</p>
		<p>&#169RoboSten 2021</p>
	</div>
</body>
<script type="text/javascript" src="scripts/events.js"></script>
</html>

<?php 

	$conn->close();

 ?>