<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DC Comics - Connexion</title>


  </head>
  <body>

   <?php include 'nav.php'; ?>


    <section id="formulaire-connexion">

      <form class="formulaire" method="post" action="connexion.php" autocomplete="off" autocomplete="false">
            <h2>Connexion</h2>
            <label for="pseudo"> <!--Identifiant--> </label> <br> <input type="text" placeholder="Identifiant" size="24" name="email" id="email" autocomplete="off"/>
               <br/>
                 <label for="password"> <!--Password--> </label>  <br> <input type="password" placeholder="Mot de passe" name="password" id="password" autocomplete="off"/>
                 <br>
                 <input id="envoyer" type="submit" value="Se connecter"/>

      </section>

           <?php include 'footer.php'; ?>
  </body>
</html>
