<?php include 'nav.php';
require 'bdd.php';
?>

<?php
    if($_GET['id'] != 0){
        $idCat = $_GET['id'];
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
  <title>Page sujet</title>
  <link rel="stylesheet" href="font/styleheet.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section id="sectionp-thread">

  <section id="sectionp-forum">
    <h2> <?php $query = $pda->prepare("SELECT `title` FROM `categories` WHERE `id_categories` = :idCat");
    $query->bindValue('idCat', $idCat);
    $query->execute(); ?> </h2>
    <p>Afficher le nom de la catégorie</p>
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
            <div class="col-md-5">
              <?php
                 $query = $pda->prepare("SELECT * FROM `topics` WHERE `id_categories` = :idCat");
                 $query->bindValue('idCat', $idCat);
                 $query->execute();
                 while($result = $query->fetch()){
                   echo '<a href="page-message.php?id='.$result['id'].'">';
                   echo '<div class="sujet">';
                   echo '<h5> '.$result['title'].' </h5>';
                   echo '</div>';
                   echo '</a>';
                 }
                 $query->closeCursor();

              ?>
            </div>
            <div class="col-md-5">
<p>Crée par l'utilisateur X</p>
            </div>

            <div class="col-md-1">
<p>Date</p>
            </div>

          </div>

        </div>

      </div>
      <div class="col-md-3 tools-thread">
<p>mettre les outils pour créer un sujet ici</p>
      </div>

    </div>

  </div>
</section>


  <?php
  include 'footer.php';
  ?>

</body>

</html>
