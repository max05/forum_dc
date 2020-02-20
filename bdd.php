<?php

try {
$pda = new PDO("mysql:host=batfolioai213.mysql.db;dbname=batfolioai213;charset=utf8","batfolioai213","Leclerc8");
// Après host, mettre l'adresse mysql, dbname mettre le nom de la BDD, ensuite nom utilisateur et mot de passe

} catch (\Exception $e) {
  echo "<pre>";
  var_dump($e);
  echo "</pre>";
  exit;
} ?>
