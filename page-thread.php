<?php include 'nav.php';
require 'bdd.php';
?>

<?php
if ($_GET['id'] != 0) {
  $idCat = $_GET['id'];
} else {
}

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Page sujet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="font/styleheet.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section id="sectionp-thread">

    <section id="sectionp-forum">
      <h2> <?php $query = $pda->prepare("SELECT `title` FROM `categories` WHERE `id_categories` = :idCat");
            $query->bindValue('idCat', $idCat);
            $query->execute(); ?> </h2>

      <h4>Afficher le nom de la catégorie</h4>

    </section>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-7">
          <div class="base-thread">
            <h5>Sujets</h5>
          </div>

          <div class="container-thread">
            <div class="row">
              
                <?php
                $query = $pda->prepare("SELECT * FROM `topics` WHERE `id_categories` = :idCat");
                $query->bindValue('idCat', $idCat);
                $query->execute();
                while ($result = $query->fetch()) {
                  echo '<div class="col-md-5">';
                  echo '<a href="page-message.php?id=' . $result['id'] . '">';
                  echo '<div class="sujet">';
                  echo '<h5> ' . $result['title'] . ' </h5>';
                  echo '</div>';
                  echo '</a>';
                  echo '</div>';
                }
                $query->closeCursor();


                ?>
              
              <div class="col-md-5">
                <?php
                echo '<a href="page-message.php?id=' . $result['id'] . '">';
                echo '<div>';
                echo '<p>' . "Crée par " . '<strong>' . $_SESSION['pseudo'] . '</strong>' . '</p>';
                echo '</div>';
                echo '</a>';

                ?>
              </div>


              <div class="col-md-1">
                <?php
                echo '<a href="page-message.php?id=' . $result['id'] . '">';
                echo '<div>';
                echo '<p>' . "Crée par " . '<strong>' .$result['date'] . '</strong>' . '</p>';
                echo '</div>';
                echo '</a>';

                ?>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3 tools-thread">
          <?php if($_SESSION == true) { ?>
            <form action="requete-topic.php" method="post" class="form-sujet">
              <label for="titre">Titre du sujet :</label><input type="text" id="titre_topic" name="titre_topic" placeholder="Votre titre">
              <label for="message">Messages :</label><textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
              <input type="hidden" name="idCat" value="<?= $idCat ?>">
              <input type="submit" id="send" name="Envoyer">
            </form>

         <?php } else { ?>
          <p for="connexion">Vous devez être connecter pour poster</p>
          <a href="page-connexion.php"><button class="btn-primary">Connexion</button></a>


          <?php } ?>
        </div>

      </div>

    </div>
  </section>


  <?php
  include 'footer.php';
  ?>

</body>

</html>
