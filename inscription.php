<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Inscription</title>
</head>
<body>

<div data-aos="zoom-in">
  <form class="inscription" action="requete_inscription.php" method="post">
    <div class="images">
      <img src="images\inscription.png" alt="dc-comic">
    </div>
    <div class="container">
      <div class="left">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
      </div>
      <div class="right">
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
      </div>
      <div class="block pseudo">
        <label for="pseudo">Pseudo :</label><br>
        <input type="text" name="pseudo" id="pseudo">
      </div>
    </div>
  <div class="block email">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email">
  </div>
  <div class="block email">
    <label for="email-confirm">Confirmation email :</label>
    <input type="email" name="email-confirm" id="email_confirm">
  </div>
  <div class="container mdp">
    <div class="left">
      <label for="mdp">Mot de passe :</label>
      <input type="password" name="mdp" id="mdp">
    </div>
    <div class="right">
      <label for="mdp-confirm">Confirmation mdp</label>
      <input type="password" name="mdp-confirm">
    </div>
  </div>
  <div class="block sexe">
    <label for="genre">Sexe :</label>
    <label for="femme">Femme :</label>
    <input type="radio" name="gender" value="Femme" id="gender">
    <label for="homme">Homme :</label>
    <input type="radio" name="gender" value="Homme" id="gender">
  </div>
  <div class="block age">
    <label for="age">Age :</label>
    <input type="text" name="age" id="age">
  </div>
  <div class="right">
    <input type="submit" name="valid" value="Valider ">
  </div>

</form>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({once: true,
  duration: 2000});
</script>
</body>
</html>

