<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png" />
    <link rel="stylesheet" href="../dragonwiki.css">
    <link href="https://fonts.googleapis.com/css?family=Eagle+Lake|Goudy+Bookletter+1911|Open+Sans|Raleway" rel="stylesheet">
    <title>Session 5 - Nyanzaru</title>
  </head>
  <body>

    <?php include "../header-sub.php"; ?>

<div class="wrapper">

<main class="session">
<div class="">


<h2>Session 5 - Nyanzaru</h2>
<hr>
<h4>13 février 2018</h4>
<p>Les héros arrivent au port de Nyanzaru (prononciation : <span class="pronounciation">[ni-anne-za-rou]</span>).</p>
<p>Unique vraie ville de tout Chult, Nyanzaru est située tout au sud de la baie de Chult. Les autres sites de la péninsule ne sont que des ruines ou des repaires de créatures monstrueuses. Port Nyanzaru était encore récemment sous le contrôle de l'Amn, une autre nation, mais il y a de cela neuf ans, l'Amn a été contraint de l'abandonner au profit d'un riche et puissant consortium de marchands Chultans, afin d'éviter une guerre sanglante qui de toutes manières aurait assurément débouché sur l'indépendance de la cité. Depuis, Port Nyanzaru est dirigé par sept princes marchands Chultans.</p>

<p>Nyanzaru est un bastion de la civilisation et du commerce au sein d'un pays sauvage et dangereux. L'argent qui s'y brasse rendrait tout commerçant de la Porte de Baldur ou d'Eauprofonde jaloux. C'est aussi une ville colorée et animée. Outre le commerce, la plus grande attraction sont les courses de dinosaures sur lesquelles les locaux et les visiteurs parient souvent des sommes énormes. La ville possède également de grands bazars, de magnifiques temples et demeures, des cirques et des tournois de gladiateurs. Mais tout n'est pas idyllique à Port Nyanzaru, qui est entouré d'ennemis. La jungle regorge de féroces reptiles et de morts-vivants, les pirates rôdent sur la mer environnante, et la bouche de la baie abrite un dragon-tortue affamé.</p>
<div class="bordering">
<h5>Quelques remarques :</h5>
<ul>
  <li>La chaleur et l'humidité sont accablantes.</li>
  <li>Le port est très actif, de nombreux bâteaux marchands sont amarrés, notamment des vaisseaux de l'Anneau de Fer (pavillon rouge avec un cercle gris).</li>
  <li>Des dinosaures domestiqués servent les citadins.</li>
  <li>Les Chultans (prononciation: [kult-ann]) ont la peau sombre et apprécient les vêtements colorés et les accessoires (bijoux, plumes, tresses).</li>
  <li>La population est principalement humaine, mais il y a quelques Tabaxis, principalement des ménestrels.</li>
  <li>Le commerce est contrôlé par les 7 princes marchands, qui ont monopole sur les activités commerciales.</li>
</ul>
</div>
<img src="../images/nyanzaru.png" alt="">
<div class="bordering">

<p>Quelques bâtiments :</p>
<ul>
  <li>Le coeur de l'activité commerciale de Nyanzaru se déroule dans 3 lieux : le Bazar Rouge, le Grand Souk et le Marché des Gemmes.</li>
  <li>Les Chultans sont religieux : de grands et anciens temples sont dispersés dans la ville (dédiés par exemple à Gond, le dieu de l'artisanat, ou à Savras, le dieux de la divination).</li>
  <li>Deux auberges sont réputées : la Maison du Repos et le Lézard Tonnerre.</li>
  <li>Dans le Grand Colisée se déroulent des courses de dinosaures.</li>
</ul>
</div>
<img src="../images/dinosaur-race.jpg" alt="">

<p>Les héros participent à leur première course de dinosaures, Solstice et Boddinoc remportent la course!</p>
<p>Ils vont fêter leur victoire à la Maison du Repos. Eaux-Vives fait grande impression avec sa musique et son chant.</p>
<p>À l'auberge, plusieurs guides proposent leurs services : Gweldyr, Musharib, Faroul, Gondolo et Salida.</p>
<p>Les héros apprennent que Brie est chez Jessamine. Ils rencontrent la princesse. Brie est gravement malade, atteinte par la malédiction. Jessamine est également en train de lentement pourrir.</p>

</div>
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
