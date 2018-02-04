
<?php
session_start();
include("securite.php");

//acces BDD
require_once("acces-bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Tableau de bord</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">


      <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php include ("menu.php");?>

  <!-- Partie provisoire simulation données de la base -->
  <?php {
      //            TODO ajouter l'id_utilisateur ! ! ! ! ! ! !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
      $id_utilisateur = 4;

  }

  require_once("acces-bdd.php");

  $resultatCompte = $bdd->query("SELECT COUNT(id) AS nbentree FROM evenement WHERE `id_utilisateur` = $id_utilisateur ORDER BY `evenement`.`date` ASC");
  $valeurs= $resultatCompte->fetch();
  $nbentree = $valeurs['nbentree'];

  $donnees_bdd = $bdd->query("SELECT * FROM evenement WHERE `id_utilisateur` = $id_utilisateur ORDER BY `evenement`.`date` ASC");

  ?>


  <section id="introduction-contact" class="container-fluid">

      <div class="col-md-12 row text-center">
          <h1>Tableau de bord Contributeur</h1>

          <!-- Présentation -->
          <section id="presentation" class="container">
              <div class="row">
                  <p>À partir de cet écran vous allez pouvoir :</p>
                  <p>Créer un nouvel événement, gérer votre compte et vos événements existants.</p>
              </div>
          </section>
          <!-- Fin Présentation -->

          <!-- Partie bandeau BOUTONS -->
          <section id="tableau-de-bord" class="container">
              <div class="row text-center">
              <a href="nouvel-evenement.php" class="lien_bleu font_roboto">Créer un événement</a>
              <a href="non-developpe.php" class="lien_bleu font_roboto">Gérer mon compte</a>
              </div>
          </section>
          <!-- Fin Partie bandeau BOUTONS -->

      </div>
  </section>



  <!-- Partie mes événements -->

  <section id="en-tete-mes-evenements" class= "container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2><?php  echo "$nbentree Événement(s)"?></h2>
          </div>
  </section>



  <section id="evenements" class="container-fluid">
      <?php


      if (!($valeurs= $donnees_bdd->fetch())) {
          echo "<p class='message textBlanc'>Vous n'avez aucun événement !</p>";
      }
      else {
      ?>

      <article class="evenement-block row">
          <div class="marge-article">
              <div class="evenement-description col-md-12" >
                  <div class="row">
                      <div class="col-md-4">
                          <h2 class="tdb"><?php echo $valeurs['titre'] ?></h2>
                      </div>

                      <div class="col-md-3">
                          <h4 class="align-v"><?php echo $valeurs['categorie'] ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><?php echo strftime('%e %b. %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['statut'] ?></h4>
                      </div>

                      <div class="col-md-5 text-right">
                          <a href="modifier-evenement.php?id_evenement=<?php echo $valeurs['id'] ?>" class="lien_bleu petit_lien font_roboto">Modifier</a>
                          <a href="non-developpe.php" class="lien_bleu petit_lien font_roboto backgroundRouge">Supprimer</a>
                          <a href="non-developpe.php" class="lien_bleu petit_lien font_roboto">Dupliquer</a>
                      </div>
                  </div>
              </div>
          </div>
      </article>

      <?php
    }

      while ($valeurs = $donnees_bdd->fetch()) {
          ?>

          <article class="evenement-block row">
              <div class="marge-article">
                  <div class="evenement-description col-md-12" >
                      <div class="row">
                          <div class="col-md-4">
                              <h2 class="tdb"><?php echo $valeurs['titre'] ?></h2>
                          </div>

                          <div class="col-md-3">
                              <h4 class="align-v"><?php echo $valeurs['categorie'] ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><?php echo strftime('%e %b. %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['statut'] ?></h4>
                          </div>

                          <div class="col-md-5 text-right">
                              <a href="modifier-evenement.php?id_evenement=<?php echo $valeurs['id'] ?>" class="lien_bleu petit_lien font_roboto">Modifier</a>
                              <a href="non-developpe.php" class="lien_bleu petit_lien font_roboto backgroundRouge">Supprimer</a>
                              <a href="non-developpe.php" class="lien_bleu petit_lien font_roboto">Dupliquer</a>
                          </div>
                      </div>
                  </div>
              </div>
          </article>

      <?php
      }
        ?>
  </section>




  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>