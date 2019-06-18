<?php
$errors = [];

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors['message'] = "Vous n'avez pas renseigné votre message";
}
session_start();
if(!empty($errors)) {
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
} else {
  $_SESSION['errors'] = $errors;
  $received = "Vous avez reçu un message de ". $_POST['nom'] ." depuis votre formulaire de contact :\n
      Adresse d'envoi : " . $_POST['email'] . "\n
      " . $_POST['message'];
  $headers="MIME-Version: 1.0\r\n";
  $headers='FROM: ' . $_POST['email'];
  $headers='Content-Type:text/html; charset=utf-8;';
  $headers='Content-Transfer-Encoding: 8bit';
  mail('contact@maximelarrieu.website', 'Message de ' . htmlspecialchars($_POST['nom']) .' via formulaire contact' , $received, $headers);
}

  /***DATABASE CONTACT FORM***/
  try {
    include_once '../secure/config.php';
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
    header("Location: form.php");
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
      <h2>VOTRE MESSAGE A BIEN ÉTÉ ENVOYÉ</h>
      <h4>Merci pour votre message <?php echo htmlspecialchars($_POST['nom']); ?> !</h4>
      <div id="socialLinks">
        <p>Ce site web a été réalisé dans le cadre de mes études supérieures.
        Merci de l'avoir visité.</p>
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
  <script src="../script.js"></script>
</body>

</html>
