<?php
  include_once 'config.php';
  /***CV PAGE REQUESTS TO BDD***/
  /**Desciption section**/
  $desc = $connexion->prepare('SELECT description FROM cvintro;');

  /**School section**/
  $ynov = $connexion->prepare('SELECT * FROM academicareer WHERE id=4;');
  $epitech = $connexion->prepare('SELECT * FROM academicareer WHERE id=3;');
  $lycee = $connexion->prepare('SELECT * FROM academicareer WHERE id=2;');
  $college = $connexion->prepare('SELECT * FROM academicareer WHERE id=1;');

  /**Job section**/
  $job = $connexion->prepare('SELECT * FROM xpro WHERE id=1;');
  $jobc = $connexion->prepare('SELECT * FROM xpro WHERE id=2;');

  /**Competences section**/
  $html = $connexion->prepare('SELECT * FROM competences WHERE id=1;');
  $css = $connexion->prepare('SELECT * FROM competences WHERE id=2;');
  $linux = $connexion->prepare('SELECT * FROM competences WHERE id=3;');
  $js = $connexion->prepare('SELECT * FROM competences WHERE id=4;');
  $c = $connexion->prepare('SELECT * FROM competences WHERE id=5;');
?>
