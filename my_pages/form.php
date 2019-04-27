<?php
  /***HISTORY MSG***/
  $monfichier = fopen('../historymsg.txt', 'ar+');
  $date = date('d/m/Y h:i:s');
  $contactname = $_POST['nom'];
  $contactmail = $_POST['email'];
  $spaces = "\r\n";
  $separators = "===============================";

  fwrite($monfichier, $date);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $contactname);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $contactmail);
  fwrite($monfichier, $spaces);
  fwrite($monfichier, $separators);
  fwrite($monfichier, $spaces);

  fclose($monfichier);
  /***DATABASE CONTACT FORM***/
  try {
    include('../secure/config.php');
    $connexion = new PDO("mysql:host=$server;dbname=id8918687_cv_database", $login, $password);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion à la base de données réussie.';

    $request = $connexion->prepare (
      "INSERT INTO contact(nom, email, message)
      VALUES(:nom,:email,:message)"
    );
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $request->bindParam(':nom',$nom);
    $request->bindParam(':email',$email);
    $request->bindParam(':message',$message);
    $request->execute();
  }

  catch(PDOException $except) {
    echo 'Echec de la connexion : ' .$except->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Merci ! - Maxime Larrieu</title>
  <link rel="stylesheet" href="../my_styles/mainwrapper.css">
  <link rel="stylesheet" href="../my_styles/header.css">
  <link rel="stylesheet" href="../my_styles/footer.css">
  <link rel="stylesheet" href="../my_styles/form_style.css">
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
      <h2>A BIENTOT !</h>
      <h4>Merci pour votre message<?php echo strip_tags($_POST['nom']); ?> !</h4>
      <div id="socialLinks">
        <p>Retrouvez-moi également sur </p>
      </div>
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
