<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Connexion</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <link rel="stylesheet" href="../my_styles/login_style.css">
  </head>
  <body>
    <div id="login">
      <form method="POST" action="../admin/admin.php" />
        <label>Identifiant :</label>
        <input type="text" placeholder="Votre pseudo..." name="user" required />
        <label>Mot de passe :</label>
        <input type="text" placeholder="Votre mot de passe..." name="pass" required />
        <input type="submit" value="SE CONNECTER" name="log" />
        <?php
          if(isset($_POST['log'])) {
            $logg = $connexion->prepare("
            SELECT * FROM login
            WHERE USERNAME = '".$_POST['user']."'
            AND PASSWORD = '".$_POST['pass']."'
            LIMIT 1");
            $logg->execute();
          }
        ?>
      </form>
    </div>
  </body>
</html>
