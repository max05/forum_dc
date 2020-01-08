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
      <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <header>

            <p>DC COMICS <span>ESPACE FORUM</span> </p>


      <?php 
        if($_SESSION == true){ ?>
        <nav>
        <ul>
          <li> <a href="index.php">Accueil</a> </li>
          <li> <a href="#">Forum</a> </li>
          <li> <a href="deconnexion.php">Deconnexion</a> </li>
          <?="<p>".$_SESSION[0]['pseudo']."</p>"; ?>
        </ul>
      </nav>
        <?php } else { ?>
                <nav>
                <ul>
                  <li> <a href="index.php">Accueil</a> </li>
                  <li> <a href="#">Forum</a> </li>
                  <li> <a href="page-connexion.php">Connexion</a> </li>
                </ul>
              </nav>
        <?php }
      ?>

    </header>

  </body>
</html>
