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

            <h1>DC COMICS <span>ESPACE FORUM</span> </h1>

        <a class="connexion" href="#">Connexion</a>


      <nav>
        <ul>
          <li> <a href="index.php">Accueil</a> </li>
          <li> <a href="#">Forum</a> </li>
          <li> <a href="inscription.php">Inscription</a> </li>
          <li> <a href="#">Connexion</a> </li>
        </ul>
      </nav>

    </header>

<main>

  <section id="accueil">

  </section>

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
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $("#menu").click(function() {
        $(".menu_liens").toggle();
      });
    });
  </script>
</html>
