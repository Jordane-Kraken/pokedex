<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="pokemon_section">
<?php foreach ($pokemons as $pokemon) : ?>
  <div class="pokemon_card">
    <img src="assets/images/<?= $pokemon['image']?>.png" alt="pokemonPicture" class="pokemon_img" />
    <h3><?= $pokemon['nom'] ?></h3>
    <p>N° <?= $pokemon['numero'] ?></p>
    <p>PV : <?= $pokemon['pv'] ?> <progress id="file" max="250" value=<?= $pokemon['pv'] ?>><?= $pokemon['pv'] ?></progress></p>
    <p>Attaque : <?= $pokemon['attaque'] ?> <progress id="file" max="134" value=<?= $pokemon['attaque'] ?>><?= $pokemon['attaque'] ?></progress></p>
    <p>Défense : <?= $pokemon['defense'] ?> <progress id="file" max="180" value=<?= $pokemon['defense'] ?>><?= $pokemon['defense'] ?></progress></p>

  </div>
<?php endforeach ?>
</section>

<?= $this->endSection() ?>

