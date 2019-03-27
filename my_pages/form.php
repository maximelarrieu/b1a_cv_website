<?php
  $monfichier = fopen('../historymsg.txt', 'ar+');
  $date = date('d/m/Y h:i:s');
  $contactname = $_POST['nom'];
  $contactmail = $_POST['email'];
  $spaces = "\r\n";
  $separators = "*-*-*-*-*-*-*-*-*-*-*-*-*-*";

  fwrite($monfichier, $date);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $contactname);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $contactmail);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $separators);
  fwrite($monfichier, $spaces);

  fclose($monfichier);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../my_styles/contact_style.css">
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
    <div id="response">
      <h4>Merci pour votre message <?php echo strip_tags($_POST['nom']); ?></h4>
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
