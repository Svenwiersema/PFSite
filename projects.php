<?php

	include "php/connection.php";

	$sql = "SELECT * FROM projecten";

	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<?php
include "snippets/head.php";
?>
<body id="body">
	<?php
	include "snippets/header.php";
	?>
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

	<?php
	include "snippets/footer.php";
	?>
</body>
</html>

<?php 

	$conn->close();

 ?>