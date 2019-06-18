<?php
  include_once '../secure/requests_projects.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Projets - Maxime Larrieu</title>
  <link rel="stylesheet" href="../my_styles/projects_style.css">
  <link rel="stylesheet" href="../my_styles/mainwrapper.css">
  <link rel="stylesheet" href="../my_styles/header.css">
  <link rel="stylesheet" href="../my_styles/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
</head>

<body>
    <header>
      <h1>Maxime Larrieu</h1>
      <h4><?php echo date('d/m/Y'); ?></h4>
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
      <h2>MES PROJETS</h2>
      <?php
        /*SQL request to bdd*/
        $intro->execute();
        $descintro = $intro->fetch();
      ?>
      <p><?php echo $descintro['Description']?></p>
    </div>
    <div id="main">
      <h2>MES PROJETS RÉCENTS</h2>
      <hr>
      <img src="../ressources/network.jpg" alt="Illustration projets réseau"/>
      <div class="description">
        <?php
          /*SQL request to bdd*/
          $projetone = $connexion->prepare('SELECT * FROM projects WHERE id=1;');
          $projetone->execute();
          $projectone = $projetone->fetch(PDO::FETCH_ASSOC);
        ?>
        <h3><a href="<?php echo $projectone['LINK'] ?>" target="_blank"><?php echo $projectone['TITLE']?></a></h3>
        <p><?= $projectone['DESCRIPTION']; ?></p>
        <p class="realised"><?= $projectone['TECHNO']; ?></p>
      </div>
      <img src="../ressources/converter.png" alt="Illustration converter markdown to html"/>
      <div class="description">
        <?php
          /*SQL request to bdd*/
          $projetwo->execute();
          $projectwo = $projetwo->fetch();
        ?>
        <h3><a href="<?php echo $projectwo['LINK'] ?>" target="_blank"><?= $projectwo['TITLE']?></a></h3>
        <p><?= $projectwo['DESCRIPTION']?></p>
        <p class="realised"><?= $projectwo['TECHNO']; ?></p>
      </div>
      <img src="../ressources/pong.png" alt="Illustration projet pong" />
      <div class="description">
        <?php
          /*SQL request to bdd*/
          $projethree->execute();
          $projecthree = $projethree->fetch();
        ?>
        <h3><a href="<?php echo $projecthree['LINK'] ?>" target="_blank"><?php echo $projecthree['TITLE'];?></a></h3>
        <p><?= $projecthree['DESCRIPTION']; ?></p>
        <p class="realised"><?= $projecthree['TECHNO']; ?></p>
      </div>
    </div>
    <footer>
      <div id="firstblockfooter">
        <p>Ynov @ <span id="current-year"></span></p>
      </div>
      <div id="secondblockfooter">
        <a href="https://github.com/maximelarrieu"><img src="../ressources/github.png" alt="github"><a/>
        <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/"><img src="../ressources/linkedin.png" alt="linkedin"></a>
      </div>
      <div id="thirdblockfooter">
        <p> <a href="login.php">Administration</a></p>
      </div>
    </footer>
  <script src="../script.js"></script>
</body>
</html>
