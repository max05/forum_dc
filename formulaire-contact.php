<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];


$email = $_POST['email'];
$sujet = "Formulaire de contact";
$objet = $_POST['objet'];

$mailDestinataire="jemy59239@icloud.com";

		$from = "From: ".$prenom." ".$nom."<".$email."> \nMime-Version:\n";
		$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
		$header = $sujet;

$messageMail = "
Formulaire de contact:

Nom :   ".$nom."
Prénom :   ".ucfirst($prenom)."
Email :   ".$email."
Objet :   ".$objet."


".Stripslashes($_POST['message']).";



$mail = mail($mailDestinataire, $sujet, $messageMail);
var_dump($mail);

header('Location: accueil.php');

?>
