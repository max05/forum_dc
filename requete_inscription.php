<?php
session_start();
require 'bdd.php'; ?>
    <?php if (isset($_POST["prenom"]) && !empty($_POST["pseudo"]) && isset($_POST["email"]) && !empty($_POST["email-confirm"]) && isset($_POST["mdp"]) && !empty($_POST["mdp-confirm"])) {
      $query = $pda->prepare("SELECT `email` FROM `users` WHERE `email` = :email");
      $query->bindValue("email", $_POST['email']);
      try {
        $query->execute();
        $users = $query->fetch();
        if ($users['email'] != $_POST['email']) {
          $query = $pda->prepare("INSERT INTO `users`(`pseudo`, `password`, `gender`, `age`, `email`) VALUES(:pseudo, :mdp, :gender, :age, :email)");
          $query->bindValue("pseudo", $_POST['pseudo']);
          $query->bindValue("mdp", md5($_POST['mdp']));
          $query->bindValue("gender", $_POST['gender']);
          if (is_string($_POST['age']) || ($_POST['age'] == '')) {

            $query->bindValue("age", NULL);
          } else {
            $query->bindValue("age", $_POST['age']);
          }
          $query->bindValue("email", $_POST['email']);
          try {
            $query->execute();
            echo '<h1>Inscription réussi</h1>';
            echo '<h2>Vous allez être redirigé dans quelques instants ... </h2>';
            echo '<script> 
              window.setTimeout(function(){
                window.location.href="accueil.php";
              }, 2000);            
              </script>';
          } catch (\Exception $e) {
            echo "Erreur dans l'inscription";
            var_dump($e);
          }
        } else {
          echo "email déjà utilisé";
        }
      } catch (\Throwable $th) {
        //throw $th;
      }
    } ?>
