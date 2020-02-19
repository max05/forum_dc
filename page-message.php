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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="font/styleheet.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section class="sectionp-thread">

  <section id="messagepage-bloc">
  <section id="messagep-forum">
    <?php
      $queryTitle = $pda->prepare("SELECT `title` FROM `topics` WHERE `id` = :idTop");
      $queryTitle->bindValue('idTop' , $idTop);
      $queryTitle->execute();
      while ($title = $queryTitle->fetch(PDO::FETCH_NAMED)) {
        echo '<h1>'.$title['title'].'</h1>';
      }
    ?>
  </section>

  <?php

  if($_SESSION == true) {
      ?>
      <form id="form-reponse" method="post" action="requete-message.php">
          <input type="textarea" name="message" placeholder="Répondre au sujet" class="textarea-message">
          <input type="hidden" value="<?= $idTop ?>" name="topic_id">
      <button type="submit" size="30px" class="btn btn-primary">Poster</button>
      </form>

<?php
  } else { ?>
<a href="page-connexion.php"><button type="button" class="btn btn-secondary">Connectez-vous pour pouvoir répondre</button></a>
<?php
  }
?>


    <?php
       $query = $pda->prepare("SELECT * FROM `comments` c LEFT JOIN `users` u ON c.`id_users` = u.`id` WHERE c.`id_topics` = :idTop ORDER BY `date` DESC");
       $query->bindValue('idTop', $idTop);
       $query->execute();
       while($result = $query->fetch(PDO::FETCH_NAMED)){
           //var_dump($result);
           echo '<div class="message-topic">';
           echo '<p class="pseudo"> '.$result['pseudo'].' </p>';
           echo '<p class="date"> Publié le '.$result['date'].' </p>';
           echo '</div>';
           echo '<div class="info-message-topic">';
           echo $result['messages'];
           echo '</div>';

       }
       $query->closeCursor();

       if($_SESSION == true) {
           ?>
            <form id="form-reponse" method="post" action="requete-message.php">

                <input type="textarea" name="message" placeholder="Répondre au sujet" class="textarea-message">
                <input type="hidden" value="<?= $idTop ?>" name="topic_id">
            <button type="submit" size="30px" class="btn btn-primary">Poster</button>
            </form>

    <?php
       } else { ?>
       <a href="page-connexion.php"><button type="button" class="btn btn-secondary">Connectez-vous pour pouvoir répondre</button></a>
    <?php
       }
    ?>

  </section>
    </section>

  <?php
  include 'footer.php';
  ?>

</body>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '.textarea-message',
        content_css : 'css/color.css'
      });
    </script>


</html>
