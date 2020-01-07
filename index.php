<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum DC</title>

  <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li> <a href="index.php">Accueil</a> </li>
          <li> <a href="#">Forum</a> </li>
          <li> <a href="#">Inscription</a> </li>
          <li> <a href="#">Connexion</a> </li>
        </ul>
      </nav>
    </header>


<main>
<section id="formulaire">
<h1>Connexion</h1>
  <form class="formulaire" method="post" action="connexion.php" autocomplete="off" autocomplete="false">
        <label for="pseudo"> <!--Identifiant--> </label> <br> <input type="text" placeholder="Identifiant" size="24" name="pseudo" id="email" autocomplete="off"/>
           <br/>
             <label for="password"> <!--Password--> </label>  <br> <input type="password" placeholder="Mot de passe" name="password" id="password" autocomplete="off"/>
             <br>
             <input id="envoyer" type="submit" value="Se connecter"/>

  </section>
  </main>
  </body>
</html>
