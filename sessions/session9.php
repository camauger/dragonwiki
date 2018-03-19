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
  <h2>Session 9 - Dungrunglung</h2>
  <hr>
  <h4>14 mars 2018</h4>
</header>

<p>Les héros, prisonniers des Grungs, accomplissent un rituel qui apaise le roi Groark.</p>
<img src="../images/grungs.jpg" alt="">

</article>
</main>
<aside class="">

<div class="character">
  <?php
  $character = file_get_contents('../creatures/grungs.php');
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
  $location = file_get_contents('../personnages/krook.php');
  echo "$location";
  ?>
</div>

</aside>
</div>
<?php include '../footer.php' ?>
</body>
</html>
