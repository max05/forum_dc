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
  <title>Forum</title>
</head>

<body>
  <section id="sectionp-forum">
    <h1>page forum</h1>
  </section>
    <?php
       $query = $pda->prepare("SELECT * FROM `topics` WHERE `id_categories` = :idCat");
       $query->bindValue('idCat', $idCat);
       $query->execute();
       while($result = $query->fetch()){
         echo '<a href="page-message.php?id='.$result['id'].'">';
         echo '<section>';
         echo '<h2> '.$result['title'].' </h2>';
         echo '</section>';
         echo '</a>';
       }
       $query->closeCursor();

    ?>



  <?php
  include 'footer.php';
  ?>

</body>

</html>