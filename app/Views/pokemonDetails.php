<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a class="previousButton_link" href="javascript:window.history.go(-1);"><button class="previousButton">Retour</button></a>
<section class="pokemon_section">
  <div class="pokemonDetails_card">
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


<div id="pokedex">
  <div id="left">
    <div id="logo"></div>
    <div id="bg_curve1_left"></div>
    <div id="bg_curve2_left"></div>
    <div id="curve1_left">
      <div id="buttonGlass">
        <div id="reflect"> </div>
      </div>
      <div id="miniButtonGlass1"></div>
      <div id="miniButtonGlass2"></div>
      <div id="miniButtonGlass3"></div>
    </div>
    <div id="curve2_left">
      <div id="junction">
        <div id="junction1"></div>
        <div id="junction2"></div>
      </div>
    </div>
    <div id="screen">
      <div id="topPicture">
        <div id="buttontopPicture1"></div>
        <div id="buttontopPicture2"></div>
      </div>
      <div id="picture">
      <img src="assets/images/<?= $image?>.png" alt="pokemonPicture" height="170"/>
      </div>
      <div id="buttonbottomPicture"></div>
      <div id="speakers">
        <div class="sp"></div>
        <div class="sp"></div>
        <div class="sp"></div>
        <div class="sp"></div>
      </div>
    </div>
    <div id="bigbluebutton"></div>
    <div id="barbutton1"></div>
    <div id="barbutton2"></div>
    <div id="cross">
      <div id="leftcross">
        <div id="leftT"></div>
      </div>
      <div id="topcross">
        <div id="upT"></div>
      </div>
      <div id="rightcross">
        <div id="rightT"></div>
      </div>
      <div id="midcross">
        <div id="midCircle"></div>
      </div>
      <div id="botcross">
        <div id="downT"></div>
      </div>
    </div>
  </div>
  <div id="right">
    <div id="stats">
      <strong>Nom : <?= $nom?></strong><br/>
      <strong>PV :  <?= $pv ?> <progress id="file" max="250" value=<?= $pv ?>><?= $pv ?></progress></strong><br/>
      <strong>Attaque : <?= $attaque ?> <progress id="file" max="134" value=<?= $attaque ?>><?= $attaque ?></progress></strong><br/>
      <strong>Défense : <?= $defense ?> <progress id="file" max="180" value=<?= $defense ?>><?= $defense ?></progress></strong><br/><br/>
      <p><?= $description ?></p><br/>
    </div>

    <div id="miniButtonGlass4"></div>
    <div id="miniButtonGlass5"></div>
    <div id="barbutton3"></div>
    <div id="barbutton4"></div>
    <div id="yellowBox1"></div>
    <div id="yellowBox2"></div>
    <div id="bg_curve1_right"></div>
    <div id="bg_curve2_right"></div>
    <div id="curve1_right"></div>
    <div id="curve2_right"></div>
  </div>
</div>

</section>

<?= $this->endSection() ?>

