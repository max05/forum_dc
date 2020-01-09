<?php
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DC Comics - Connexion</title>


  </head>
  <body>




    <section id="formulaire-connexion">

      <form class="formulaire" method="post" action="connexion.php" autocomplete="off" autocomplete="false">
            <h2>Connexion</h2>
            <label for="pseudo"> <!--Identifiant--> </label> <br><input type="text" size="24" name="mail" id="mail" placeholder="Email">
            
               <br/>
                 <label for="password"> <!--Password--> </label>  <br> <input type="password" placeholder="Mot de passe" name="password" id="password" autocomplete="off"/>
                 <br>
                 <input id="envoyer" type="submit" value="Se connecter"/>
                 <a href="inscription.php">Pas encore inscrit ? Clique ici</a>

      </section>

  <?php include 'footer.php'; ?>

  </body>
</html>
