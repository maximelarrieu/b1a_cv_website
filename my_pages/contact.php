<?php
  if(isset($_POST['mailform'])) {
    if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header="From:'maximelarrieu.website'<contact@maximelarrieu.website";
      $header="Content-Type:text/html; charset='utf-8'";
      $header="Content-Transfer-Encoding: 8bit";

      $message="
      <html>
        <body>
          <b>Nom de l'expediteur : ".$_POST['nom']."</b>
          <b>Mail de l'expediteur : ".$_POST['email']."</b>
          <b>Message de l'expediteur : ".nl2br($_POST['message'])."</b>
        </body>
      </html>";
      mail("maxime.larrieu@ynov.com", "CONTACT - maximelarrieu.website", $message, $header);
    }
    else {
      $msg="Tous les champs doivent être complétées.";
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Contact - Maxime Larrieu</title>
  <link rel="stylesheet" href="../my_styles/mainwrapper.css">
  <link rel="stylesheet" href="../my_styles/header.css">
  <link rel="stylesheet" href="../my_styles/footer.css">
  <link rel="stylesheet" href="../my_styles/contact_style.css">
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
      <h2>ME CONTACTER</h2>
      <form method="POST" action="form.php">
        <input type="text" name="nom" id="nom" placeholder="Votre nom..."/>
        <input type="text" name="email" id="email" placeholder="Votre email..."/>
        <textarea name="message" id="message" placeholder="Votre message..."></textarea>
        <input type="submit" value="Envoyer" name="mailform" />
        <?php
          if(isset($msg)) {
            echo $msg;
          }
        ?>
      </form>
    </div>
    <footer>
      <div id="firstblockfooter">
        Ynov @ <span id="current-year"></span>
      </div>
      <div id="secondblockfooter">
        N'hésitez pas à <a class="contactme" href="contact.php">me contacter</a> !
      </div>
      <div id="thirdblockfooter">
        <p>Retrouvez-moi également sur <a href="https://www.linkedin.com/in/maxime-larrieu-b563a5159/">Linkedin</a></p>
      </div>
    </footer>
  <script src="../script.js"></script>
</body>

</html>
