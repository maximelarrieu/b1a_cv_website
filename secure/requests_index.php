<?php
  include_once 'config.php';
  /***INDEX PAGE REQUESTS TO BDD***/
  /**Section description**/
  $desc = $connexion->prepare('SELECT description FROM indexintro;');
  $sub = $connexion->prepare('SELECT `sous-titre` FROM indexsub');
?>
