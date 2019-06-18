<?php
  include_once '../secure/requests_cv.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>CV - Maxime Larrieu</title>
  <link rel="stylesheet" href="../my_styles/cv_style.css">
  <link rel="stylesheet" href="../my_styles/mainwrapper.css">
  <link rel="stylesheet" href="../my_styles/header.css">
  <link rel="stylesheet" href="../my_styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.8.10/themes/smoothness/jquery-ui.css" type="text/css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
</head>

<body>
    <header>
      <h1>Maxime Larrieu</h1>
      <h4><?= date('d/m/Y'); ?></h4>
      <nav>
        <ul>
          <li><a href="../index.php">ACCUEIL</a></li>
          <li><a href="cv.php">CV</a></li>
          <li><a href="projects.php">PROJETS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <div id="contener">
      <img src="../ressources/img.jpg" height="215px" />
      <h2>Curriculum Vitae</h2>
      <button><a href="../ressources/Maxime Larrieu - CV.pdf" target="_blank">Télécharger mon CV</a></button>
      <h3>SOCIABLE, ENERGIQUE ET PONCTUEL</h3>
      <div id="intro">
        <?php
          /*SQL request to bdd*/
          $desc->execute();
          $cvdesc = $desc->fetch();
        ?>
        <p><?= $cvdesc['description']; ?></p>
      </div>
      <div id="lkRedirect">
        <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/" target="_blank"><img src="../ressources/linkedin.png" /></img></a>
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/" target="_blank">Linkedin</a>
      </div>
    </div>
    <div id="main">
      <h3>PARCOURS SCOLAIRE</h3>
      <hr>
      <div class="education">
        <?php
          /*SQL request to bdd*/
          $ynov->execute();
          $infoynov = $ynov->fetch();
        ?>
        <h4><?php echo $infoynov['TITLE']; ?></h4>
        <h5><?php echo $infoynov['SCHOOL']; ?></h5>
        <h6><?php echo $infoynov['CITY']; ?></h6>
        <h5><?php echo $infoynov['YEARS']; ?></h5>
      </div>
      <div class="education">
        <?php
          /*SQL request to bdd*/
          $epitech->execute();
          $infoepitech = $epitech->fetch();
        ?>
        <h4><?php echo $infoepitech['TITLE']; ?></h4>
        <h5><?php echo $infoepitech['SCHOOL']; ?></h5>
        <h6><?php echo $infoepitech['CITY']; ?></h6>
        <h5><?php echo $infoepitech['YEARS']; ?></h5>
      </div>
      <div class="education">
        <?php
          /*SQL request to bdd*/
          $lycee->execute();
          $infolycee = $lycee->fetch();
        ?>
        <h4><?php echo $infolycee['TITLE']; ?></h4>
        <h5><?php echo $infolycee['SCHOOL']; ?></h5>
        <h6><?php echo $infolycee['CITY']; ?></h6>
        <h5><?php echo $infolycee['YEARS']; ?></h5>
      </div>
      <div class="education">
        <?php
          /*SQL request to bdd*/
          $college->execute();
          $infocollege = $college->fetch();
        ?>
        <h4><?php echo $infocollege['TITLE']; ?></h4>
        <h5><?php echo $infocollege['SCHOOL']; ?></h5>
        <h6><?php echo $infocollege['CITY']; ?></h6>
        <h5><?php echo $infocollege['YEARS']; ?></h5>
      </div>
      <h3>EXPERIENCES PROFESSIONNELLES</h3>
      <hr>
      <div class="pro">
        <?php
          /*SQL request to bdd*/
          $job->execute();
          $infojob = $job->fetch();
        ?>
        <h4><?php echo $infojob['TITLE']?></h4>
        <h5><?php echo $infojob['COMPANY']?></h5>
        <h6><?php echo $infojob['CITY']?></h6>
        <h5><?php echo $infojob['YEARS']?></h5>
      </div>
      <div class="pro">
        <?php
          /*SQL request to bdd*/
          $jobc->execute();
          $infojobc = $jobc->fetch();
        ?>
        <h4><?php echo $infojobc['TITLE']?></h4>
        <h5><?php echo $infojobc['COMPANY']?></h5>
        <h6><?php echo $infojobc['CITY']?></h6>
        <h5><?php echo $infojobc['YEARS']?></h5>
      </div>
      <h3>COMPETENCES</h3>
      <hr>
      <div class="skillbar">
        <?php
          /*SQL request to bdd*/
          $html->execute();
          $htmlbar = $html->fetch();
        ?>
        <div class="title htmlColor"><?= $htmlbar['COMPETENCE'] ?></div>
        <div class="progress html"></div>
        <div class="value_progressing"><?= $htmlbar['VALUE'] ?>%</div>
      </div>
      <div class="skillbar">
        <?php
          /*SQL request to bdd*/
          $css->execute();
          $cssbar = $css->fetch();
        ?>
        <div class="title cssColor"><?= $cssbar['COMPETENCE'] ?></div>
        <div class="progress css"></div>
        <div class="value_progressing"><?= $cssbar['VALUE'] ?>%</div>
      </div>
      <div class="skillbar">
        <?php
          /*SQL request to bdd*/
          $linux->execute();
          $linuxbar = $linux->fetch();
        ?>
        <div class="title cssColor"><?= $linuxbar['COMPETENCE'] ?></div>
        <div class="progress linux"></div>
        <div class="value_progressing"><?= $linuxbar['VALUE'] ?>%</div>
      </div>
      <div class="skillbar">
        <?php
          /*SQL request to bdd*/
          $js->execute();
          $jsbar = $js->fetch();
        ?>
        <div class="title cssColor"><?= $jsbar['COMPETENCE'] ?></div>
        <div class="progress js"></div>
        <div class="value_progressing"><?= $jsbar['VALUE'] ?>%</div>
      </div>
      <div class="skillbar">
        <?php
          /*SQL request to bdd*/
          $c->execute();
          $cbar = $c->fetch();
        ?>
        <div class="title cssColor"><?= $cbar['COMPETENCE'] ?></div>
        <div class="progress c"></div>
        <div class="value_progressing"><?= $cbar['VALUE'] ?>%</div>
      </div>
      <h3>LOISIRS</h3>
      <hr>
      <div id="hobbies">
        <img src="../ressources/foot.png" ></img>
        <img src="../ressources/music.png" ></img>
        <img src="../ressources/web.png" ></img>
        <img src="../ressources/rugby.png" ></img>
      </div>
    </div>
    <footer>
      <div id="firstblockfooter">
        Ynov @ <span id="current-year"></span>
      </div>
      <div id="secondblockfooter">
        <a href="https://github.com/maximelarrieu"><img src="../ressources/github.png" alt="github"><a/>
        <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/"><img src="../ressources/linkedin.png" alt="linkedin"></a>
      </div>
      <div id="thirdblockfooter">
        <p> <a href="login.php">Administration</a></p>
      </div>
    </footer>
  <script type="text/javascript" src="../script.js"></script>
</body>
</html>
