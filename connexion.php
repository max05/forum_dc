<?php session_start();
var_dump($_SESSION);
 try {
  $pda = new PDO("mysql:host=localhost;dbname=amigraf_forum_dc;charset=utf8","root","naruto59");

} catch (\Exception $e) {
  echo "<pre>";
  var_dump($e);
  echo "</pre>";
  exit;
} ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php if(isset($_POST["email"]) && !empty($_POST["mdp"])) {
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