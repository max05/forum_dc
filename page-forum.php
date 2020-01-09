<?php
include 'nav.php';
require 'bdd.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Forum</title>
</head>

<body>

  <section id="section-forum">
    <section id="sectiondiv-forum">


    <?php
       $query = $pda->prepare("SELECT `id`, `title` , `description` FROM `categories`");
       $query->execute();
       while($result = $query->fetch()){
         echo '<a href="page-thread.php?id='.$result['id'].'">';
         echo '<div>';
         echo '<h3> '.$result['img'].' </h3>';
         echo '<h3> '.$result['title'].' </h3>';
         echo '<p> '.$result['description'] .'</p>';
         echo '</div>';
         echo '</a>';
       }
       $query->closeCursor();
    ?>
    </section>
      </section>



  <?php
  include 'footer.php';
  ?>

</body>

</html>
