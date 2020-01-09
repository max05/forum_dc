<?php
session_start();

require 'bdd.php'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nav</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/styleheet.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <header>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <a href="accueil.php">
          <!-- <img src="images/logo.svg" alt="logo-dc-forum"> -->
      </a>

      <div class="connexion-deco">
        <?php
          if($_SESSION == true){ ?>
              <?="<p>".$_SESSION['user']['pseudo']."</p>"; ?>
                    <li> <a href="deconnexion.php">Deconnexion</a> </li>

        <?php } else {
           ?>
           <li> <a href="page-connexion.php">Connexion</a> </li>

        <?php }
      ?>
      </div>


    </div>
  </div>
</div>

<nav>
<ul>
  <li> <a href="accueil.php">Accueil</a> </li>
  <li> <a href="heros.php">Univers</a>
  <ul>
    <li> <a href="#">Héros</a> </li>
    <li> <a href="#">Méchant</a> </li>
    <li> <a href="#">Films</a> </li>
    <li> <a href="#">Série</a> </li>
    <li> <a href="#">Animés</a> </li>
    <li> <a href="#">Comics</a> </li></li>
  </ul>
  <li> <a href="page-forum.php">Forum</a> </li>
    <li> <a href="#formulaire-contact">Nous contacter</a> </li>
</ul>
</nav>
    </header>

  </body>
</html>
