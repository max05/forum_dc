<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DC Comics - Connexion</title>


  </head>
  <body>

   <?php include 'nav.php'; ?>


    <section id="formulaire">
    <h1>Connexion</h1>
      <form class="formulaire" method="post" action="connexion.php" autocomplete="off" autocomplete="false">
            <label for="pseudo"> <!--Identifiant--> </label> <br> <input type="text" placeholder="Identifiant" size="24" name="email" id="email" autocomplete="off"/>
               <br/>
                 <label for="password"> <!--Password--> </label>  <br> <input type="password" placeholder="Mot de passe" name="password" id="password" autocomplete="off"/>
                 <br>
                 <input id="envoyer" type="submit" value="Se connecter"/>

      </section>
  </body>
</html>
