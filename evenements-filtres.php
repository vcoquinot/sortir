<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ssortirgratos.fr / Événements filtrés</title>
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

  <section id="introduction-evenements-filtres" class="container-fluid">
      <div class="col-md-12 row text-center">
          <h1>Les événements filtrés</h1>
      </div>
  </section>

<!-- Présentation -->
      <section id="presentation" class="container">
          <div class="row">
              <p>À l'aide des boutons ci-dessous à droite vous allez pouvoir filtrer les événements.</p>
          </div>
      </section>
<!-- Fin Présentation -->


<!-- Partie bandeau BOUTONS EVENEMENTS -->
  <section id="boutons-evenement" class= "container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2><?php echo "Événements " . $_GET["tri"] ?></h2>
          </div>
          <div class="col-md-6">

              <a class="boutons-filtres" href="evenements-filtres.php?tri=trié(s) par public">Par public</a>
              <a class="boutons-filtres" href="evenements-filtres.php?tri=trié(s) par catégorie">Par catégorie</a>
              <a class="boutons-filtres" href="evenements-filtres.php?tri=trié(s) par département">Par département</a>
              <a class="boutons-filtres" href="evenements-filtres.php?tri=du mois">30 jours</a>
              <a class="boutons-filtres" href="evenements-filtres.php?tri=de la semaine">7 jours</a>
              <a class="boutons-filtres" href="evenements-filtres.php?tri=du jour">Du jour</a>

          </div>
  </section>

<!-- Fin partie bandeau BOUTONS EVENEMENTS -->


<!-- Partie EVENEMENTS -->

  <section id="evenements" class="container-fluid">
      <?php
      require_once("acces-bdd.php");

      if($_GET["tri"] == "du jour"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement WHERE `date` = CURRENT_DATE ORDER BY `evenement`.`heure` ASC");
/*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }

      if($_GET["tri"] == "de la semaine"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement WHERE `date` >= CURRENT_DATE AND `date` <= CURRENT_DATE+7 ORDER BY `evenement`.`date`  ASC");
          /*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }

      if($_GET["tri"] == "du mois"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement WHERE `date` >= CURRENT_DATE AND `date` <= CURRENT_DATE+30 ORDER BY `evenement`.`date`  ASC");
          /*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }

      if($_GET["tri"] == "trié(s) par département"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement ORDER BY `departement` ASC");
          /*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }

      if($_GET["tri"] == "trié(s) par catégorie"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement ORDER BY `categorie` ASC");
          /*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }

      if($_GET["tri"] == "trié(s) par public"){
          $donnees_bdd = $bdd->query("SELECT * FROM evenement ORDER BY `public` ASC");
          /*        $données_bdd = $bdd->query("SELECT * FROM evenement WHERE categorie = 'Expo';");*/
      }


      include ("bloc-evenement.php");
      ?>
  </section>

<!-- Fin Partie EVENEMENTS -->

  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>