<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="pokemon_section">
<?php foreach ($pokemons as $pokemon) : ?>
  <div class="pokemon_card">
    <p class="pokemon_number">N°<?= $pokemon['numero'] ?></p>
    <img src="assets/images/<?= $pokemon['image']?>.png" alt="pokemonPicture" class="pokemon_img" />
    <h3 class="pokemon_name"><?= $pokemon['nom'] ?></h3>
    <?php if ($pokemon['name'] == 'Plante') : ?> 
      <img class="pokemon_type" src='assets/images/plante.png'></img>
    <?php elseif ($pokemon['name'] == 'Feu') : ?> 
      <img class="pokemon_type" src='assets/images/feu.png'></img>
    <?php elseif ($pokemon['name'] == 'Eau') : ?> 
      <img class="pokemon_type" src='assets/images/eau.png'></img>
    <?php elseif ($pokemon['name'] == 'Poison') : ?> 
      <img class="pokemon_type" src='assets/images/poison.png'></img>
    <?php elseif ($pokemon['name'] == 'Acier') : ?> 
      <img class="pokemon_type" src='assets/images/acier.png'></img>
    <?php elseif ($pokemon['name'] == 'Insecte') : ?> 
      <img class="pokemon_type" src='assets/images/insecte.png'></img>
    <?php elseif ($pokemon['name'] == 'Électrik') : ?> 
      <img class="pokemon_type" src='assets/images/electrik.png'></img>
    <?php elseif ($pokemon['name'] == 'Psy') : ?> 
      <img class="pokemon_type" src='assets/images/psy.png'></img>
    <?php elseif ($pokemon['name'] == 'Sol') : ?> 
      <img class="pokemon_type" src='assets/images/sol.png'></img>
    <?php elseif ($pokemon['name'] == 'Vol') : ?> 
      <img class="pokemon_type" src='assets/images/vol.png'></img>
    <?php elseif ($pokemon['name'] == 'Dragon') : ?> 
      <img class="pokemon_type" src='assets/images/dragon.png'></img>
    <?php elseif ($pokemon['name'] == 'Normal') : ?> 
      <img class="pokemon_type" src='assets/images/normal.png'></img>
    <?php elseif ($pokemon['name'] == 'Roche') : ?> 
      <img class="pokemon_type" src='assets/images/roche.png'></img>
    <?php elseif ($pokemon['name'] == 'Glace') : ?> 
      <img class="pokemon_type" src='assets/images/glace.png'></img>
    <?php elseif ($pokemon['name'] == 'Combat') : ?> 
      <img class="pokemon_type" src='assets/images/combat.png'></img>
    <?php endif ?>
    <div class="pokedex_div"><a href="/<?=$pokemon['pokeId']?>"><img src='assets/images/pokedex.png' alt='pokedex' class="pokedex"></a></div>
  </div>
<?php endforeach ?>
</section>

<?= $this->endSection() ?>

