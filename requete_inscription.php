<?php
session_start();
require 'bdd.php'; ?>
    <a href="index.php">Accueil</a>
    <?php if(isset($_POST["prenom"]) && !empty($_POST["pseudo"]) && isset($_POST["email"]) && !empty($_POST["email-confirm"]) && isset($_POST["mdp"]) && !empty($_POST["mdp-confirm"])) {
      $query = $pda->prepare("SELECT `email` FROM `users` WHERE `email` = :email");
      $query->bindValue("email", $_POST['email']);
      try {
        $query->execute();
        $users = $query->fetch();
        if($users['email'] != $_POST['email']){
          $query = $pda->prepare("INSERT INTO `users`(`pseudo`, `password`, `gender`, `age`, `email`) VALUES(:pseudo, :mdp, :gender, :age, :email)");
          $query->bindValue("pseudo", $_POST['pseudo']);
          $query->bindValue("mdp", $_POST['mdp']);
          $query->bindValue("gender", $_POST['gender']);
          if($_POST['age'] == ''){
            $query->bindValue("age", NULL);
          }
          else{
            $query->bindValue("age", $_POST['age']);
          }
          $query->bindValue("email", $_POST['email']);
          try {
              $query->execute();
              echo "Inscription valide";
              header("Location: accueil.php");
          } catch (\Exception $e) {
            echo "Erreur dans l'inscription";
            var_dump($e);  
          }
        } else{
          echo "email déjà utilisé";
        }
      } catch (\Throwable $th) {
        //throw $th;
      }

    } ?>