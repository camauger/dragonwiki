<?php
  $title = "le titre de la page"; // Titre de la page
  $description = "la description de la page"; // Description de la page
  $banner = "tombofannihilation"; // Nom de l'image utilisée pour la bannière de la page
 ?>

<?php
include '../head-sub.php'
?>
<div class="wrapper">


<main class="session">
<article class="">

<header>
  <h2>Session 8 - Le Doigt de Feu</h2>
  <hr>
  <h4>7 mars 2018</h4>
</header>
<p>Les héros s'approchent de la tour que les habitants de Chult appelle le Doigt de Feu. Le sol marécageux est jonché de zombies désarticulés. Sur l'un d'entre eux, le groupe récupère une besace ayant appartenue à un transmutateur de Laelith.</p>
<p>Les Terros attaquent les héros par surprise. Le combat est rude et Akuma, le Feynardeau, est tué par les sauriens. Boddinoc utilise ses pouvoirs druidiques pour créer un brouillard magique qui permet aux héros de fuir.</p>
<p>De retour au Triomphe, le groupe se rend compte que leurs amis gnomes et Salida ont disparu. Solstice piste leur trace et tombe sur un groupe de Grungs. Après une brève escarmouche, les héros se laissent prendre prisonniers.</p>

<img src="../images/pterafolk.jpg" alt="">

</article>
</main>
<aside class="">

<div class="character">
  <?php
  $character = file_get_contents('../creatures/terros.php');
  echo "$character";
  ?>
</div>

<div class="location">
  <?php
  $location = file_get_contents('../lieux/mezro.php');
  echo "$location";
  ?>
</div>


<div class="character">
  <?php
  $location = file_get_contents('../personnages/ubtao.php');
  echo "$location";
  ?>
</div>

</aside>
</div>
<?php include '../footer.php' ?>
</body>
</html>
