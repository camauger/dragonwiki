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
  <h2>Session 7 - Le Triomphe</h2>
  <hr>
  <h4>28 février 2018</h4>
</header>

<p>Les héros engagent Salida comme guide et embarquent à bord du Triomphe. Le bateau-montgolfière gnome est dirigé par Fuk, un capitaine-ingénieur peu bavard qui commande ses 4 cousins.</p>
<p>Chult est vaste et il est difficile de savoir où commencer son exploration. Les héros optent d'aller aux ruines de Mezro.</p>
<p>En route, Takumeko entend dans la jungle des bruits de combat entre des Géants et un dinosaure.</p>
<p>Les héros ont un moment de frayeur lorsqu'un dragon rouge vole proche du Triomphe. Mais Aryana remarque que le dragon ne s'intéresse pas au ballon, il semble chercher quelque chose...</p>
<p>En approchant du Doigt de Feu, une haute tour de pierre dominant la jungle environnante, l'équipage se fait attaquer par un groupe de Terros. Trois des gnomes se sont massacrés par les sauriens volants. Eaux-Vives est grièvement blessé durant le combat.</p>


</article>
</main>
<aside class="">


<div class="location">
  <?php
  $location = file_get_contents('../lieux/mezro.php');
  echo "$location";
  ?>
</div>

<div class="character">
  <?php
  $location = file_get_contents('../personnages/fuk.php');
  echo "$location";
  ?>
</div>

</aside>
</div>
<?php include '../footer.php' ?>
</body>
</html>
