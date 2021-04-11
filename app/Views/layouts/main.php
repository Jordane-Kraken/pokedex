<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pokedex</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- STYLES -->
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header class='header'>
	<img class='pokeball' src='assets/images/pokeball.png'/>
		<h1 class='title'>Pokedex réalisé avec Code Igniter 4</h1>
	<img class='pokeball' src='assets/images/pokeball.png'/>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">Accueil</a>
<li class="nav-item">Trier par type :</li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
		<li class="nav-item">
        <a class="nav-link" href="/">Tous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/type-plante">Plante</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/type-eau">Eau</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-glace">Glace</a>
			</li>
      <li class="nav-item">
        <a class="nav-link" href="/type-feu">Feu</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-insecte">Insecte</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-acier">Acier</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-roche">Roche</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-electrik">Electrik</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-dragon">Dragon</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-poison">Poison</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-psy">Psy</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-sol">Sol</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-combat">Combat</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="/type-normal">Normal</a>
      </li>
    </ul>
  </div>
</nav>

<!-- CONTENT -->
<section>
  <?= $this->renderSection('content') ?>
</section>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
<p class="footer">Pokedex - 2021</p>
</footer>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- -->

</body>
</html>
