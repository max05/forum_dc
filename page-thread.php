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
  <section id="sectionp-forum">
    <h1> <?php echo $result['titre'] ?> </h1>
  </section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-7 container-thread">
        <?php
           $query = $pda->prepare("SELECT * FROM `topics` WHERE `id_categories` = :idCat");
           $query->bindValue('idCat', $idCat);
           $query->execute();
           while($result = $query->fetch()){
             echo '<a href="page-message.php?id='.$result['id'].'">';
             echo '<div class="sujet">';
             echo '<h2> '.$result['title'].' </h2>';
             echo '</div>';
             echo '</a>';
           }
           $query->closeCursor();

        ?>

      </div>
      <div class="col-md-4">

      </div>

    </div>

  </div>



  <?php
  include 'footer.php';
  ?>

</body>

</html>
