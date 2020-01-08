<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
  <title>Inscription - Forum DC</title>
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


<section id="formulaire">
    <div class="img-inscription">
      <form class="inscription" action="requete_inscription.php" method="post" autocomplete="off">
<img src="images/logo.png" alt="logo-dc">
<h1>Inscription</h1>



<div class="deuxblocs">

  <input type="text" name="prenom" id="prenom" placeholder="Prénom *" autocomplete="off" >

  <input type="text" name="nom" id="nom" placeholder="Nom *" autocomplete="off">
</div>

<div class="deuxblocs">
  <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo *" autocomplete="off">
      <input type="text" name="age" id="age" placeholder="Age" autocomplete="off">

</div>

<div class="deuxblocs">
    <input type="email" name="email" id="email" placeholder="Email *" autocomplete="off">
    <input type="email" name="email-confirm" id="email_confirm" placeholder="Confirmation de l'email *" autocomplete="off">
</div>

  <div class="deuxblocs">
    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe *" autocomplete="off">
    <input type="password" name="mdp-confirm" placeholder="Confirmation du mot de passe *" autocomplete="off">
  </div>

<div class="genre">
<div class="femme">
  <input type="radio" name="gender" value="Femme" class="option-input radio" id="gender"> <br>
  <p>Femme</p>
</div>

<div class="homme">
  <input type="radio" name="gender" value="Homme" class="option-input radio" id="gender"> <br>
  <p>Homme</p>
</div>

</div>

    <input type="submit" name="valid" value="S'inscrire" id="envoyer">

</form>
</div>

</section>
</main>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({once: true,
  duration: 2000});
</script>
</body>
</html>
