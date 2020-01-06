<?php include 'bdd.php'; 

var_dump(isset($_POST["prenom"]) && !empty($_POST["pseudo"]) && isset($_POST["email"]) && !empty($_POST["email-confirm"]));
    var_dump($_POST) ?>
    <a href="index.php">Accueil</a>
    <?php if(isset($_POST["prenom"]) && !empty($_POST["pseudo"]) && isset($_POST["email"]) && !empty($_POST["email-confirm"]) && isset($_POST["mdp"]) && !empty($_POST["mdp-confirm"])) {
      $query = $pda->prepare("INSERT INTO `users`(`pseudo`, `password`, `gender`, `age`, `email`) VALUES(:pseudo, :mdp, :gender, :age, :email)");
      $query->bindValue("pseudo", $_POST['pseudo']);
      $query->bindValue("mdp", $_POST['mdp']);
      $query->bindValue("gender", $_POST['gender']);
      $query->bindValue("age", $_POST['age']);
      $query->bindValue("email", $_POST['email']);
      try {
        $query->execute();
        echo "Inscription valide";
      } catch (\Exception $e) {
        echo "Erreur dans l'inscription";
        var_dump($e);

      }
    } ?>