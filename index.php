<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="my_styles/index_style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <header>
      <h1>Maxime Larrieu</h1>
      <h4><?php echo date('d/m/Y'); ?></h4>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="my_pages/cv.php">CV</a></li>
          <li><a href="my_pages/projects.php">PROJETS</a></li>
          <li><a href="my_pages/contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <div id="contener">
      <img class="pdp" src="ressources/img.jpg" alt="Photo de profil" />
      <h2>BONJOUR,</h2>
      <p>Maxime Larrieu, 20 ans. Résidant Bordeaux.</p>
      <p>Jeune passionné d'informatique et de matériel informatique,
      actuellement étudiant en école d'informatique.</p>
      <p class="welcomeMsg">Bienvenue sur mon CV en ligne.</p>

    </div>
    <footer>
      <div id="firstblockfooter">
        Ynov @ <span id="current-year"></span>
      </div>
      <div id="secondblockfooter">
        N'hésitez pas à <a class="contactme" href="contact.php">me contacter</a> !
      </div>
      <div id="thirdblockfooter">
        <img src="ressources/linkedin.png" />
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/">Linkedin</a></p>
      </div>
    </footer>
  <script src="script.js"></script>
</body>

</html>
