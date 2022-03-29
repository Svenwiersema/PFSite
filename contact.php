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
		<form name="contactform" action="php/email.php" method="post">
			<div class="row">
				<div class="col col-12 col-md-6">
					<label for="firstName" class="form-label">Voornaam</label><span><i <?php ($_POST["nameErr"] ? "class='bi bi-x wrong'" : "class='bi bi-check good'"); ?>></i></span>
					<input type="text" class="form-control" id="firstName" name="firstname">
					
				</div>
				<div class="col col-12-col-md-6">
					<label for="lastName" class="form-label">Achternaam</label><span><i <?php ($_POST["lNameErr"] ? "class='bi bi-x wrong'" : "class='bi bi-check good'"); ?> id="validate"></i></span>
					<input type="text" class="form-control" id="lastName" name="lastname">
				</div>
				<div class="col col-12">
					<label for="email" class="form-label">E-mail</label><span><i class="bi bi-x wrong" id="validateEmail"></i></span>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="col col-12">
					<label for="message" class="form-label">Bericht</label><span><i class="bi bi-x wrong" id="validate"></i></span>
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