<!DOCTYPE html>
<html>
<?php
include "snippets/head.php";
?>
<body class="d-flex flex-column min-vh-100">
	<?php
	include "snippets/header.php";
	?>

	<script type="module" src="scripts/contact.js"></script>

	<div class="container">
		<form action="">
			<div class="row">
				<div class="col col-12 col-md-6">
					<label for="firstName" class="form-label">First name</label>
					<input type="text" class="form-control" id="firstName">
				</div>
				<div class="col col-12-col-md-6">
					<label for="lastName" class="form=label">Last name</label>
					<input type="text" class="form-control" id="lastName">
				</div>

			</div>
		</form>
	</div>

	<?php
	include "snippets/footer.php";
	?>
</body>
<script type="text/javascript" src="scripts/events.js"></script>
</html>