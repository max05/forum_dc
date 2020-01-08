<?php

 try {
  $pda = new PDO("mysql:host=localhost;dbname=amigraf_forum_dc;charset=utf8","root","root");

} catch (\Exception $e) {
  echo "<pre>";
  var_dump($e);
  echo "</pre>";
  exit;
} ?>
