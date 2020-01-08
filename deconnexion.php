<?php
    require 'bdd.php';
    session_start();
    session_destroy();
    echo "Vous êtes déconnecté";
?>