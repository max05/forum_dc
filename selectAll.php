<?php require 'bdd.php';

$query = $pda->prepare("SELECT `pseudo`, `email`, `password` FROM `users`");
try {
    $query->execute();
    $users = $query->fetchAll(); 

} catch (\Throwable $th) {
    echo "ERREUR !!";
}