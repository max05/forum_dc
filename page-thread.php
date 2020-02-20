<?php include 'nav.php';
require 'bdd.php';
?>

<?php
if ($_GET['id'] != 0) {
  $idCat = $_GET['id'];
} else {
  echo "Erreur";
  header("Location: accueil.php");
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


                        <div class="col-md-12 tools-thread mobile">
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

        <div class="col-md-1">

        </div>
        <div class="col-md-7">
          <div class="base-thread">
            <h5>Sujets</h5>
          </div>

          <div class="container-thread">
            <div class="row">

                <?php //faire en sorte qu'on voit le pseudo de l'utilisateur qui a créer le topic
                $query = $pda->prepare("SELECT t.`id` AS t_id, t.`title`, t.`date` AS t_date, u.`pseudo` AS u_pseudo  FROM `topics` t LEFT JOIN `users` u ON u.id = t.id_users WHERE t.`id_categories` = :idCat ORDER BY t.`date` DESC");
                $query->bindValue('idCat', $idCat);
                $query->execute();
                while ($result = $query->fetch()) {
                  echo '<div class="col-md-4">';
                  echo '<a href="page-message.php?id=' . $result['t_id'] . '">';
                  echo '<div class="sujet">';
                  echo '<h5> ' . $result['title'] . ' </h5>';
                  echo '</div>';
                  echo '</a>';
                  echo '</div>';
                  ?>
                <div class="col-md-4">
                <?php
                echo '<a href="page-message.php?id=' . $result['t_id'] . '">';
                echo '<div>';
                echo '<p>' . "Crée par " . '<strong>' . $result['u_pseudo'] . '</strong>' . '</p>';
                echo '</div>';
                echo '</a>';

                ?>
              </div>
              <div class="col-md-4">
                <?php
                echo '<a href="page-message.php?id=' . $result['t_id'] . '">';
                echo '<div>';
                echo '<p>' . "Date : " . '<strong>' .$result['t_date'] . '</strong>' . '</p>';
                echo '</div>';
                echo '</a>';

                ?>
              </div>

              <?php  }
                $query->closeCursor();
                ?>
            </div>
          </div>

        </div>
        <div class="col-md-3 tools-thread desktop">
          <?php if($_SESSION == true) { ?>
            <form action="requete-topic.php" method="post" class="form-sujet">
              <label for="titre"> <p>Titre du sujet : </p></label><input type="text" id="titre_topic" name="titre_topic" placeholder="Votre titre">
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
