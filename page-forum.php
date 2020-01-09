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
       $query = $pda->prepare("SELECT * FROM ``categories");
       while($result = $query->fetch()){
         echo "<section>";
         echo "<h2> ".$result['title']." </h2>";
         echo "<h3> ".$result['description'] ."</h3>";
         echo "</section>";
       }
    ?>



  <?php
  include 'footer.php';
  ?>

</body>

</html>