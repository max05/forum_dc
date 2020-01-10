<?php
include 'nav.php';
require 'bdd.php';

            $query = $pda->prepare("INSERT INTO `comments` (`messages`, `date`, `id_topics`, `id_users`) VALUES (:messages, NOW(), :idTop, :idUser)");
            $query->bindValue("messages",$_POST['message']);
            $query->bindValue("idTop", $_POST['topic_id']);
            $query->bindValue("idUser", $_SESSION['user']['id']);
            try {
                var_dump($_POST);
                var_dump($query->execute());
                echo "Message envoyé";
                header("Location: page-message.php?id='".$_POST['topic_id']."'");
            } catch (\Throwable $th) {
                echo "Erreur dans l'envoie du message";
            }
            ?>