<?php

 try {
  $pda = new PDO("mysql:host=localhost;dbname=amigraf_forum_dc;charset=utf8","root","root");
  // Après host, mettre l'adresse mysql, dbname mettre le nom de la BDD, ensuite nom utilisateur et mot de passe

} catch (\Exception $e) {
  echo "<pre>";
  var_dump($e);
  echo "</pre>";
  exit;
} ?>
