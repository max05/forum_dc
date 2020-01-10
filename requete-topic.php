<?php
include 'nav.php';
require 'bdd.php';

$query = $pda->prepare("INSERT INTO `topics` (`title`, `date`, `id_categories`, `id_users`) VALUES (:titre, NOW(), :idCat, :idUser)");
$query->bindValue("titre", $_POST['titre_topic']);
$query->bindValue("idCat", $_POST['idCat']);
$query->bindValue("idUser", $_SESSION['user']['id']);
try {
    $query->execute();
    var_dump($query->lastIndexId());
    //header("Location: page-message.php?id=" . $_POST['idCat']);
} catch (\Throwable $th) {
    echo "Erreur dans l'envoie du message";
}
?>
