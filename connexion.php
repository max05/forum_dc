<?php
session_start();
var_dump($_SESSION);
 require 'bdd.php'; 
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php /*condition pour savoir si le mail et le mdp n'est pas vide, puis on exécute pour la requête et
on fait une condition pour savoir si le mdp est dans la bdd, sinon on envoie un message d'erreur */
  if (isset($_POST["email"]) || !empty($_POST["password"])) {
    $query = $pda->prepare("SELECT `id`, `pseudo`, `email`, `password` FROM `users` WHERE `email` = :mail");
    $query->bindValue("mail", $_POST['mail']);
    try {
      $query->execute();
      $user = $query->fetch();
      var_dump($_POST);
      var_dump($_POST['mail']);
      var_dump($_POST['password']);
      var_dump($query->fetchAll());
      if ($user['password'] == $_POST['password']) {
        echo "Bienvenue : " . $user['pseudo'];
        $_SESSION['user'] = $user;
        var_dump($_SESSION);
        header("Location: accueil.php");
        exit;
      } else if ($user['password'] != $_POST['password']) {
        echo "ERREUR MOT DE PASSE";
      }
    } catch (\Exception $ex) {
      echo "CONNEXION ECHOUE";
    }
  } else {
    echo "veuillez saisir votre login et/ou mot de passe";
  }

  ?>
</body>

</html>