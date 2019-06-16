<?php
  include_once '../secure/config.php';
  include_once '../secure/requests_index.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <link rel="stylesheet" href="style.css">

    <title>Dashboard - Maxime Larrieu</title>
    <script src = "https://cdn.tiny.cloud/1/ykl6ae6i8da5qip69wd7170r11fiaivjclzkzznvtlvywp49/tinymce/5/tinymce.min.js"></script>
    <script>
    tinymce.init({
      selector: '#indexintro'
    });
    </script>
    <script>
    tinymce.init({
      selector: '#cvintro'
    });
    </script>
    <script>
    tinymce.init({
      selector: '#projectsintro'
    });
    </script>
  </head>
  <body>
        <!-- page content -->
        <div>
          <h1>ADMINISTRATION</h1>
        </div>
        <div class="packmodif">
          <h3>Modification de la page index</h3>
          <form method="post">
            <textarea id="indexintro" name="indexintro">Description page index</textarea>
            <input type="submit" value="MODIFIER" name="indexmodif" />
          </form>
          <?php
          if (isset($_POST['indexmodif']) && isset($_POST['indexintro'])){
            $indexintro = addslashes($_POST['indexintro']);
            $modifindex = $connexion->prepare("UPDATE indexintro SET DESCRIPTION = '".$indexintro."'");
            $modifindex->execute();
          }
          ?>
          <div class="new">
            <form method="POST">
              <h4>Modifier le sous-titre</h4>
              <input type=text placeholder="Sous-titre" name="subtitle" />
              <input type="submit" value="MODIFIER" name="submodif"/>
            </form>
            <?php
            if (isset($_POST['submodif']) && isset($_POST['subtitle'])){
              $newsubt = addslashes($_POST['subtitle']);
              $newsubt = $connexion->prepare("UPDATE indexsub SET `sous-titre` = '".$newsubt."'");
              $newsubt->execute();
            }
            ?>
          </div>
        </div>
        <div class="packmodif">
          <h3>Modification de la page cv</h3>
          <form method="post">
            <textarea id="cvintro" name="cvintro">Description page cv</textarea>
            <input type="submit" value="MODIFIER" name="cvmodif" />
          </form>
          <?php
          if (isset($_POST['cvmodif']) && isset($_POST['cvintro'])){
            $cvintro = addslashes($_POST['cvintro']);
            $modifcv = $connexion->prepare("UPDATE cvintro SET DESCRIPTION = '".$cvintro."'");
            $modifcv->execute();
          }
          ?>
          <div class="new">
            <form method="post">
              <h4>Ajouter une expérience professionnelle</h4>
              <input type="text" placeholder="Titre métier" name="title" />
              <input type="text" placeholder="Titre entreprise" name="company" />
              <input type="text" placeholder="Ville" name="city" />
              <input type="text" placeholder="Année" name="years" />
              <input type="submit" value="AJOUTER" name="workmodif" />
            </form>
            <?php
            if (isset($_POST['title']) && isset($_POST['company']) && isset($_POST['city']) && isset($_POST['years']) && isset($_POST['workmodif'])){
              $newschool = $connexion->prepare("
              INSERT INTO
              xpro
              VALUES(
                NULL,
                '".addslashes($_POST['title'])."',
                '".addslashes($_POST['company'])."',
                '".addslashes($_POST['city'])."',
                '".addslashes($_POST['years'])."')"
                );
              $newschool->execute();
            }
            ?>
          </div>
          <div class="new">
            <form method="post">
              <h4>Ajouter une école</h4>
              <input type="text" placeholder="Dîplome" name="title" />
              <input type="text" placeholder="Ecole" name="school" />
              <input type="text" placeholder="Ville" name="city" />
              <input type="text" placeholder="Année" name="years" />
              <input type="submit" value="AJOUTER" name="schoolmodif" />
            </form>
            <?php
            if (isset($_POST['title']) && isset($_POST['school']) && isset($_POST['city']) && isset($_POST['years']) && isset($_POST['schoolmodif'])){
              $newcv = $connexion->prepare("
              INSERT INTO
              academicarrer
              VALUES(
                NULL,
                '".addslashes($_POST['title'])."',
                '".addslashes($_POST['school'])."',
                '".addslashes($_POST['city'])."',
                '".addslashes($_POST['years'])."')"
                );
              $newcv->execute();
            }
            ?>
          </div>
          <div class="new">
            <form method="post">
              <h4>Modifier compétences</h4>
              <select name="comp">
                <?php
                  $list = $connexion->prepare('SELECT COMPETENCE FROM competences ORDER BY COMPETENCE');
                  $list->execute();
                  $selectedcomp = $list->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($selectedcomp as $choice) {
                    echo '<option>'. $choice['COMPETENCE'].'</option>';
                  }
                ?>
              </select>
              <input type="text" placeholder="Competence" name="title" />
              <input type="text" placeholder="Valeur" name="valeur" />
              <?php
              if (isset($_POST['comp']) && isset($_POST['compmodif'])){
                $newcomp = $connexion->prepare("
                UPDATE competences
                SET
                COMPETENCE = '".addslashes($_POST['title'])."',
                VALUE = '".addslashes($_POST['valeur'])."'
                WHERE COMPETENCE = '".$_POST['comp']."'
                ");
                try {
                  $newcomp->execute();
                } catch(Exception $e) {
                  echo 'Message : Erreur de modification';
                  echo $e->getMessage();
                }
              }
              ?>
              <input type="submit" value="MODIFIER" name="compmodif">
            </form>
          </div>
        </div>
        <div class="packmodif">
          <h3>Modification de la page projet</h3>
          <form method="post">
            <textarea id="projectsintro" name="projectsintro">Description page projet</textarea>
            <input type="submit" value="MODIFIER" name="intromodif" />
          </form>
          <?php
          if (isset($_POST['intromodif']) && isset($_POST['projectsintro'])){
            $projectsintro = addslashes($_POST['projectsintro']);
            $modifprojects = $connexion->prepare("UPDATE projectsintro SET Description = '".$projectsintro."'");
            $modifprojects->execute();
          }
          ?>
          <div class="new">
            <form method="post">
              <h4>Ajouter un nouveau projet</h4>
              <input type="text" placeholder="Titre" name="title" />
              <input type="text" placeholder="Description" name="desc" />
              <input type="text" placeholder="Techno(s) utilisée(s)" name="techno" />
              <input type="text" placeholder="Lien" name="link" />
              <input type="submit" value="AJOUTER" name="newproject" />
            </form>
            <?php
            if (isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['techno']) && isset($_POST['link']) && isset($_POST['newproject'])){
              $newproject = $connexion->prepare("
              INSERT INTO
              projects
              VALUES(
                NULL,
                '".addslashes($_POST['title'])."',
                '".addslashes($_POST['desc'])."',
                '".addslashes($_POST['techno'])."',
                '".addslashes($_POST['link'])."')
                ");
              $newproject->execute();
            }
            ?>
          </div>
        </div>
        <div class="packmodif">
          <h3>Ajouter un membre admin</h3>
          <form method="post">
            <input type="text" placeholder="Identifiant..." name="newid" />
            <input type="text" placeholder="Mot de passe..." name="newpass" />
            <input type="submit" value="AJOUTER" name="newadmin" />
          </form>
          <?php
          if (isset($_POST['newid']) && isset($_POST['newpass']) && isset($_POST['newadmin'])){
            $addmin = $connexion->prepare("
            INSERT INTO
            login
            VALUES(
              NULL,
              '".addslashes($_POST['newid'])."',
              '".addslashes($_POST['newpass'])."')
            ");
            $addmin->execute();
          }
          ?>
        </div>
  </body>
</html>
