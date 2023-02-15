<div class="container">
	<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
		<div class="col mb-3">
			<a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
				<svg class="bi me-2" width="40" height="32">
				<use xlink:href="#bootstrap" />
			</svg>
			</a>
			<p class="text-muted">&copy; 2022</p>
    	</div>

    <!-- Liens des réseaux sociaux (id = id de la page d'options, cad Informations générales) -->
    <div class="col mb-3">
		<h5>Réseaux sociaux</h5>

		<?php $idOptionsPage = 76; ?>

		<ul class="nav flex-column">
			<li class="nav-item mb-2 tutu"><a href="<?php the_field('facebook', $idOptionsPage) ?>">Facebook</a></li>
			<li class="nav-item mb-2"><a href="<?php the_field('twitter', $idOptionsPage) ?>">Twitter</a></li>
			<li class="nav-item mb-2"><a href="<?php the_field('instagram', $idOptionsPage) ?>">Instagram</a></li>
		</ul>
    </div>

    <div class="col mb-3">
		<h5>Coordonnées</h5>
		<ul class="nav flex-column">
			<li class="nav-item mb-2"> E-mail :  <?php echo the_field('email', $idOptionsPage) ?> </li>
			<li class="nav-item mb-2"> Téléphone : <?php echo the_field('phone', $idOptionsPage) ?> </li>
		</ul>
    </div>

    <div class="col mb-3">
		<h5>Section</h5>
		<ul class="nav flex-column">
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
		</ul>
    </div>

    <div class="col mb-3">
		<h5>Section</h5>
		<ul class="nav flex-column">
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
		</ul>
    </div>
  </footer>
</div>

</body>

</html>