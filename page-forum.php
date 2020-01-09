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
  <section id="sectionp-forum">
    <h1>page forum</h1>
  </section>
    <?php
       $query = $pda->prepare("SELECT `id`, `title` , `description` FROM `categories`");
       $query->execute();
       while($result = $query->fetch()){
         echo '<a href="page-thread.php?id='.$result['id'].'">';
         echo '<section>';
         echo '<h2> '.$result['title'].' </h2>';
         echo '<h3> '.$result['description'] .'</h3>';
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