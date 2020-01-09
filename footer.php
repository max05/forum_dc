
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="font/styleheet.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/style.css">
    <title>footer</title>


  </head>

    <footer>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="images/logo.svg" alt="logo-dc-forum">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<ul>
  <li> <a href="accueil.php">Accueil</a> </li>
  <li> <a href="page-forum.php">Forum</a> </li>
  <li> <a href="page-connexion.php">Connexion</a> </li>
</ul>
    </div>


    <div class="col-md-8">

      <h4>N'hésites pas à nous contacter si tu souhaites participer à l'évolution du site!</h4>
<form id="formulaire-contact" class="form-footer" action="formulaire-contact.php" method="post">
  <div class="deuxblocs">
    <input for="prenon" type="text" name="prenom" id="prenom" placeholder="Prénom *" autocomplete="off" >

    <input for="nom"type="text" name="nom" id="nom" placeholder="Nom *" autocomplete="off">
  </div>
<div class="deuxblocs">
  <input for="email" type="email" name="email" id="email" placeholder="Email *" autocomplete="off">
  <input for="objet" type="text" name="objet" id="objet" placeholder="Votre Sujet *" autocomplete="off">
</div>
<div class="deuxblocs">
  <textarea for="message" id="msg" name="message" placeholder="Votre message" ></textarea>
  <input class="reset" type="reset" name="reset" VALUE="Réinitialiser">
  <input class="envoyer" type="submit" name="envoyer" VALUE="Envoyer">

</div>

</form>
    </div>
    <div class="col-md-12 reseaux-sociaux">
      <p class="rejoins-nous">Rejoins-nous sur nos autres réseaux :</p> <br>

        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>

    </div>
    <div class="col-md-4 liens-annexes">
      <a href="#">Mentions légales</a>
      <a href="#">Crédits</a>
      <a href="#">Plan du site</a>
    </div>
  </div>
</div>



    </footer>

  <script src="https://kit.fontawesome.com/bbafdfc119.js" crossorigin="anonymous"></script>

</html>
