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
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<div class="menu" id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="projects.php">Projects</a></li>
			<li><a href="contact.php">Contact</a></li>
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