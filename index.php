<?php
  include_once 'secure/requests_index.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Accueil - Maxime Larrieu</title>
  <link rel="stylesheet" href="my_styles/mainwrapper.css">
  <link rel="stylesheet" href="my_styles/header.css">
  <link rel="stylesheet" href="my_styles/footer.css">
  <link rel="stylesheet" href="my_styles/index_style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <meta name="viewport" content="initial-scale=1.0" />
</head>

<body>
    <header>
      <h1>Maxime Larrieu</h1>
      <h4><?php echo date('d/m/Y'); ?></h4>
      <nav>
        <ul>
          <li><a href="index.php">ACCUEIL</a></li>
          <li><a href="my_pages/cv.php">CV</a></li>
          <li><a href="my_pages/projects.php">PROJETS</a></li>
          <li><a href="my_pages/contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <div id="contenerr">
      <img class="pdp" src="ressources/img.jpg" alt="Photo de profil" />
      <h2>Bienvenue sur mon site web CV</h2>
      <?php
        /*SQL request to bdd*/
        $desc->execute();
        $datadesc = $desc->fetch();
      ?>
      <?php echo $datadesc['description']; ?>
      <div class="bottomTitle">
        <?php
        /*SQL request to bdd*/
        $sub->execute();
        $subtitle = $sub->fetch();
        ?>
        <p><?php echo $subtitle['sous-titre']?></p>
      </div>
      <div id="bottom">
        <div class="left">
          <img class="lenovo" src="ressources/lenovo.png" alt="lenovo">
          <h3>Lenovo ThinkPad470s</h3>
        </div>
        <div class="mid">
          <img class="fedora" src="ressources/fedora.png" alt="fedora">
          <h3>Fedora 29</h3>
        </div>
        <div class="right">
          <img class="atom" src="ressources/atom.png" alt="atom">
          <h3>Atom</h3>
        </div>
      </div>
    </div>
    <footer>
      <div id="firstblockfooter">
        Ynov @ <span id="current-year"></span>
      </div>
      <div id="secondblockfooter">
        <img src="ressources/github.png" alt="github">
      </div>
      <div id="thirdblockfooter">
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/" target="_blank">Linkedin</a></p>
      </div>
    </footer>
  <script src="script.js"></script>
</body>

</html>
