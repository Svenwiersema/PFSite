<script src="scripts/events.js"></script>
<header class="shadow">
		<div class="contianer">
			<a class="menu" data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu">
                <div class="float-start ms-3 mt-3 d-sm-block d-md-none position-absolute">
				    <i class="bi bi-list"></i>
			    </div>
            </a>

			<div class="row text-center">
				<div class="col col-md-12 mx-auto">
					<img src="img/logo.png" class="logo">
				</div>

                <!-- desktop menu -->
				<div class="d-none d-md-inline">
					<div class="col col-md-12">
						<div class="btn-group mb-3">
							<a id="home" class="btn btn-outline-primary" href="index.php">Home</a>
							<a id="projecten" class="btn btn-outline-primary" href="projects.php">Projecten</a>
							<a id="contact" class="btn btn-outline-primary" href="contact.php">Contact</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>
<!-- mobile menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="menu" aria-labelledby="menuLabel">
    <div class="offcanvas-header">
        <p class="h1">Menu</p>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
        <div class="offcanvas-body">
        <ul class="list-group">
        <a class="btn" href="index.php"><li class="list-group-item menuItem">Home</li></a>
        <a class="btn" href="projects.php"><li class="list-group-item menuItem">Projecten</li></a>
        <a class="btn" href="contact.php"><li class="list-group-item menuItem">Contact</li></a>
        </ul>
    </div>
</div>