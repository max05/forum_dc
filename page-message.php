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
    ?>



  <?php
  include 'footer.php';
  ?>

</body>

</html>