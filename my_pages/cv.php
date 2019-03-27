<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../my_styles/cv_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
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
      <img src="../ressources/img.jpg" border="1px solid" height="215px" />
      <h2>Curriculum Vitae</h2>
      <button>Téléchargez mon CV</button>
      <h3>SOCIABLE, ENERGIQUE ET PONCTUEL</h3>
    </div>
    <div id="main">
      <h3>PARCOURS SCOLAIRE</h3>
      <hr>
      <div class="education">
        <h4>Expert informatique</h4>
        <h5>Ynov informatique</h5>
        <h6>Bordeaux (33)</h6>
        <p>2018-2023</p>
      </div>
      <div class="education">
        <h4>Titre d'Expert en Technologies de l’Information</h4>
        <h5>Epitech</h5>
        <h6>Bordeaux (33)</h6>
        <p>2017-2018</p>
      </div>
      <div class="education">
        <h4>Baccalauréat section Littéraire</h4>
        <h5>Lycée Elie Vinet</h5>
        <h6>Barbezieux Saint-Hilaire (16)</h6>
        <p>2014-2017</p>
      </div>
      <div class="education">
        <h4>Brevet des collèges</h4>
        <h5>Collège Sainte Marie</h5>
        <h6>Barbezieux Saint-Hilaire (16)</h6>
        <p>2013</p>
      </div>
      <h3>EXPERIENCES PROFESSIONNELLES</h3>
      <hr>
      <div class="pro">
        <h4>Vendeur</h4>
        <h5>Bricomarché</h5>
        <h6>Barbezieux Saint-Hilaire (16)</h6>
        <p>2015-2016-2017-2018</p>
      </div>
      <div class="pro">
        <h4>Animateur</h4>
        <h5>EHPAD Résidence l'Orée des Bois</h5>
        <h6>Mezin (47)</h6>
        <p>2016</p>
      </div>
      <h3>COMPETENCES</h3>
      <hr>
      <div class="skillbar">
        <div class="title htmlColor">HTML5</div>
        <div class="progress html"></div>
        <div class="value_progressing">90%</div>
      </div>
      <div class="skillbar">
        <div class="title cssColor">CSS</div>
        <div class="progress css"></div>
        <div class="value_progressing">90%</div>
      </div>
      <div class="skillbar">
        <div class="title jsColor">JAVASCRIPT</div>
        <div class="progress js"></div>
        <div class="value_progressing">70%</div>
      </div>
      <div class="skillbar">
        <div class="title cColor">C</div>
        <div class="progress c"></div>
        <div class="value_progressing">80%</div>
      </div>
      <div class="skillbar">
        <div class="title linuxColor">Linux</div>
        <div class="progress linux"></div>
        <div class="value_progressing">80%</div>
      </div>
      <h3>LOISIRS</h3>
      <hr>
    </div>
    <footer>
      <div id="firstblockfooter">
        Ynov @ <span id="current-year"></span>
      </div>
      <div id="secondblockfooter">
        N'hésitez pas à <a class="contactme" href="contact.php">me contacter</a> !
      </div>
      <div id="thirdblockfooter">
        <img src="../ressources/linkedin.png" />
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/">Linkedin</a></p>
      </div>
    </footer>
  <script src="../script.js"></script>
</body>

</html>
