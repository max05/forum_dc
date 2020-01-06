<?php require 'bdd.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php /*condition pour savoir si le mail et le mdp n'est pas vide, puis on exécute pour la requête et
on fait une condition pour savoir si le mdp est dans la bdd, sinon on envoie un message d'erreur */
if(isset($_POST["email"]) && !empty($_POST["mdp"])) {
  $query = $pda->prepare("SELECT `pseudo`, `email`, `password` FROM `users` WHERE `email` = :email");
$query->bindValue("email", $_POST['email']);
try {
  $query->execute();
  $user = $query->fetch();
  //var_dump($user);
  if ($user['password'] == $_POST['mdp']) {
      echo "Bienvenue : " . $user['pseudo'];
      $_SESSION['user'] = $user;

  } else if($user['password'] != $_POST['mdp']) {
    echo "ERREUR MOT DE PASS";
  }
} catch (\Exception $ex) {
  echo "CONNEXION ECHOUE";
} }?>
  </body>
</html>