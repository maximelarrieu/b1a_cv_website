<?php
  include_once 'config.php';

  /***CV PAGE REQUESTS TO BDD***/
  /**Description section**/
  $intro = $connexion->prepare('SELECT Description FROM projectsintro');
  
  /**Projects section**/
  $projetone = $connexion->prepare('SELECT * FROM projects WHERE id=1;');
  $projetwo = $connexion->prepare('SELECT * FROM projects WHERE id=2;');
  $projethree = $connexion->prepare('SELECT * FROM projects WHERE id=3;');
?>
