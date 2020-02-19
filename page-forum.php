<?php
include 'nav.php';
require 'bdd.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="font/styleheet.css">
<link rel="stylesheet" href="css/style.css">

<head>
  <meta charset="utf-8">
  <title>Forum</title>
</head>

<body>

  <section id="section-forum">
    <section id="sectiondiv-forum">

    <?php

    echo '<div class="container">';
    echo '<div class="row">';
       $query = $pda->prepare("SELECT `id`, `title` , `description`, `img` FROM `categories`");
       $query->execute();
       while($result = $query->fetch()){
         echo '<div class="col-md-3 col-6">';
         echo '<a class="categories-icon" href="page-thread.php?id='.$result['id'].'">';
         echo '<img src="'.$result['img'].'">';
         echo '<h3> '.$result['title'].' </h3>';
         echo '<p> '.$result['description'] .'</p>';
         echo '</a>';
         echo '</div>';
       }
       echo '</div>';
       echo '</div>';
       $query->closeCursor();
    ?>
    </section>
      </section>



  <?php
  include 'footer.php';
  ?>

</body>

</html>
