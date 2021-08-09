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

	<div class="container mt-5 mb-5">
		<form action="email.php">
			<div class="row">
				<div class="col col-12 col-md-6">
					<label for="firstName" class="form-label">Voornaam</label>
					<input type="text" class="form-control" id="firstName" name="firstname">
				</div>
				<div class="col col-12-col-md-6">
					<label for="lastName" class="form-label">Achternaam</label>
					<input type="text" class="form-control" id="lastName" name="lastname">
				</div>
				<div class="col col-12">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="col col-12">
					<label for="message" class="form-label">Bericht</label>
					<textarea class="form-control" id="message" name="message" rows="10"></textarea>
				</div>
				<div class="col col-12 mt-4 text-center">
					<button type="submit" class="btn btn-lg btn-outline-primary">Verstuur</button>
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