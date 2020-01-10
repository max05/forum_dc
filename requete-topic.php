<?php
include 'nav.php';
require 'bdd.php';

$query = $pda->prepare("INSERT INTO `topic` (`title`, `date`, `id_categories`, `id_users`) VALUES (:titre, NOW(), :idCat, :idUser)");
$query->bindValue("messages", $_POST['titre_topic']);
$query->bindValue("idCat", $_POST['topic_id']);
$query->bindValue("idUser", $_SESSION['user']['id']);
try {
    var_dump($_POST);
    var_dump($query->execute());
    echo "Message envoyé";
    header("Location: page-message.php?id='" . $_POST['topic_id'] . "'");
} catch (\Throwable $th) {
    echo "Erreur dans l'envoie du message";
}
?>
