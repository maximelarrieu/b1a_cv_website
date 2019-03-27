<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../my_styles/projects_style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <header>
      <h1>Maxime Larrieu</h1>
      <h4>Informatic student</h4>
      <nav>
        <ul>
          <li><a href="../index.php">HOME</a></li>
          <li><a href="cv.php">CV</a></li>
          <li><a href="projects.php">PROJETS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <div id="contener">
      <h2>MES PROJETS</h2>
      <p>Dans cette section, vous retrouvez mes projets les plus récents.</p>
      <p>Vous pouvez découvrir l'ensemble de mes projets scolaires et personnels sur mon <a href="https://github.com/maximelarrieu" target="_blank">Github</a>.
      <br>Tous mes projets ont été réalisés sous Fedora 29, Linux.</p>
    </div>
    <div id="main">
      <h2>MES PROJETS RÉCENTS</h2>
      <hr>
      <img src="../ressources/network.jpg" alt="Illustration projets réseau"/>
      <div class="description">
        <h3><a href="https://github.com/maximelarrieu/b1a_network_projects/" target="_blank">CCNA - Projets réseau</a></h3>
        <p>
          Retrouvez mes six projets réseaux récemment effectués. Partant de l'exploration réseau, en passant par de la spéléologie
          réseau jusqu'à la création d'une réelle topologie réseau avec le logiciel GNS3.
        </p>
        <p class="realised">Projets réalisés avec VirtualBox et GNS3</p>
      </div>
      <img src="../ressources/converter.png" alt="Illustration converter markdown to html"/>
      <div class="description">
        <h3><a href="https://github.com/maximelarrieu/b1a_python_projects/tree/master/site_static_project" target="_blank">CONVERTER - Markdown vers HTML</a></h3>
        <p>
          Développement d'un script permettant de transormer un dossier de fichiers Markdown en dossier de fichiers HTML.
          Plusieurs commandes d'interface sont utilisables. Il est possible d'y intégrer ses pages CSS.
        </p>
        <p class="realised">Projet réalisé en Python</p>
      </div>
      <img src="../ressources/pong.png" alt="Illustration projet pong" />
      <div class="description">
        <h3><a href="https://github.com/maximelarrieu/b1a_python_projects/tree/master/pong_project" target="_blank">PONG - THE GAME</a></h3>
        <p>
          Premier projet de développement. Réprésentation du plus vieux jeu vidéo du monde avec une interface Tkinter.
          Quelques fonctions permettant de déplacer les personnages et la balle. Très simpliste, jouable à deux.
        </p>
        <p class="realised">Projet réalisé en Python</p>
      </div>
    </div>
    <footer>
      <div id="firstblockfooter">
        <p>Ynov @ <span id="current-year"></span></p>
      </div>
      <div id="secondblockfooter">
        N'hésitez pas à <a class="contactme" href="contact.php">me contacter</a> !
      </div>
      <div id="thirdblockfooter">
        <img src="../ressources/linkedin.png" alt="Logo Linkedin" />
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/">Linkedin</a></p>
      </div>
    </footer>
  <script src="../script.js"></script>
</body>

</html>
