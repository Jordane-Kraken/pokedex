<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="pokemon_section">
<a href="javascript:window.history.go(-1);">Retour</a>
  <div class="pokemon_card">
    <p class="pokemon_number">N°<?= $numero ?></p>
    <img src="assets/images/<?= $image?>.png" alt="pokemonPicture" class="pokemon_img" />
    <h3 class="pokemon_name"><?= $nom ?></h3>
    <div class="progressBar_div">
    <p>PV : <?= $pv ?> <progress id="file" max="250" value=<?= $pv ?>><?= $pv ?></progress></p>
    <p>Attaque : <?= $attaque ?> <progress id="file" max="134" value=<?= $attaque ?>><?= $attaque ?></progress></p>
    <p>Défense : <?= $defense ?> <progress id="file" max="180" value=<?= $defense ?>><?= $defense ?></progress></p>
    </div>
    <p>Description : <?= $description ?></p>
    
  </div>
</section>

<?= $this->endSection() ?>

