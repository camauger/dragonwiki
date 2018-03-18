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


<h2>Session 6 - L'assaut des morts-vivants</h2>
<hr>
<h4>21 février 2018</h4>
<p>Les héros rencontrent le prince-marchand Jobal, qui leur conseille d'obtenir une charte d'exploration de l'Anneau de Fer. Il se montre particulièrement intéressé par la carte en leur possession. Il leur conseille également d'engager Salida, qui est une des meilleures guides de Nyanzaru.</p>
<p>Le capitaine Abalkir se fait arrêter, et est condamné à l'Épreuve, pour avoir triché au jeu contre Indar, protégé de Kwayothé.</p>
<p>Un prêtre de Tymora propose aux héros de faire une offrande au temple, pour célébrer leur victoire à la course de dinosaures.</p>
<p>Les héros se rendent à la Gorge de Malar, en dehors des murs, pour faire leur offrande à Tymora. Peu après, le quartier est attaqué par une horde de morts-vivants : des zombies menés par des Ghasts possédant un tatouage de triangle bleu sur le front.</p>
<p>Les héros parviennent à sauver quelques habitants avant de battre retraite à l'intérieur de la cité.</p>
</article>
 </main>
<aside class="">

<div class="character">
  <?php
  $character = file_get_contents('../personnages/princes.php');
  echo "$character";
  ?>
</div>

<div class="location">
  <?php
  $location = file_get_contents('../lieux/orolunga.php');
  echo "$location";
  ?>
</div>

<div class="location">
  <?php
  $location = file_get_contents('../lieux/coeurdragon.php');
  echo "$location";
  ?>
</div>

<div class="location">
  <?php
  $location = file_get_contents('../lieux/hrakamar.php');
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
