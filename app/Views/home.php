<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="pokemon_section">
<?php foreach ($pokemons as $pokemon) : ?>
  <div class="pokemon_card">
    <p class="pokemon_number">N°<?= $pokemon['numero'] ?></p>
    <img src="assets/images/<?= $pokemon['image']?>.png" alt="pokemonPicture" class="pokemon_img" />
    <h3 class="pokemon_name"><?= $pokemon['nom'] ?></h3>
    <div class="pokedex_div">
      <a class="pokedex_link"href="/<?=$pokemon['id']?>">
      <img src='assets/images/pokedex.png' alt='pokedex' class="pokedex">
      <span>Ouvrir le pokédex</span>
      </a>
    </div>
  </div>
<?php endforeach ?>
</section>

<?= $this->endSection() ?>


