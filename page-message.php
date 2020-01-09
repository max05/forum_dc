<?php include 'nav.php';
require 'bdd.php';
?>

<?php
    if($_GET['id'] != 0){
        $idTop = $_GET['id'];
    }
    else{
        echo "Erreur";
        header("Location: accueil.php");
    }

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Forum</title>
</head>

<body>
  <section id="sectionp-forum">
    <h1>page forum</h1>
  </section>
    <?php
       $query = $pda->prepare("SELECT * FROM `comments` c LEFT JOIN `users` u ON c.`id_users` = u.`id` WHERE c.`id_topics` = :idTop");
       $query->bindValue('idTop', $idTop);
       $query->execute();
       while($result = $query->fetch(PDO::FETCH_NAMED)){
           //var_dump($result);
           echo '<div class="message-topic">';
           echo '<p> '.$result['pseudo'].' </p>';
           echo '<p> '.$result['date'].' </p>';
           echo '<p> '. $result['messages'].' </p>';
           echo '</div>';

       }
       $query->closeCursor();

       if($_SESSION == true) {
           ?>
            <form method="post" action="page-message.php">
                <label for="message">Messages :</label>
                <input type="textarea" size="30px" name="message" id="message"> 
            <button type="submit" class="btn btn-primary">Poster</button>
            </form>
            <?php
            $query = $pda->prepare("INSERT INTO `comments` (`messages`, `date`, `id_topics`, `id_users`) VALUES (:message, '2020-01-09 00:00:00', '1', '1')");
            ?>
           
    <?php 
       } else { ?>
       <a href="page-connexion.php"><button type="button" class="btn btn-primary">Connectez-vous</button></a>
    <?php       
       }
    ?>





  <?php
  include 'footer.php';
  ?>

</body>

</html>