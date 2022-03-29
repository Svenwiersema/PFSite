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
<body class="d-flex flex-column min-vh-100">
	<?php
	include "snippets/header.php";
	?>

	<script type="module" src="scripts/project.js"></script>

	<div class="container my-5">
		<div class="row">
			<?php

				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						?>
						<div class="card-columns">
							<div class="card">
								<?php 
								echo "<img src=\"";
								echo $row["img"];
								echo "\" class=\"thumbnail\">";
								?>
								<div class="card-body">
									<h1 class="h1"><?php echo $row["titel"]; ?></h1>
									<p><?php echo $row["descriptie"]; ?></p>
									<?php
										echo "<a href=\"";
										echo $row["link"];
										echo "\" class=\"btn btn-outline-primary\" target=\"_blank\">More</a>";
									?>
								</div>
							</div>
						</div>
						<?php 
					}
				}

			?>
		</div>
	</div>

	<?php
	include "snippets/footer.php";
	?>
</body>
</html>

<?php 

	$conn->close();

 ?>