<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de réferencement des évènements gratuits dans les départements du l'Aude, du Gard, de l'Hérault, de la Lozère et des Pyrénées-Orientales">
    <title>Sortirgratos / ÉVénements gratuits dans votre région</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.MIN.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php 
    session_start();
    include ("menu.php");
    ?>
    

<!-- Caroussel size slides: 650*433-->
    <section id="slides" class="container-fluid">
        <div class="carousel slide" data-ride="carousel" id="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0"class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>
          <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide img-fluid" src="images/slides/salle-logo.png" alt="salle">
            </div>
            <div class="item">
                <img class="second-slide img-fluid" src="images/slides/spectacle.jpg" alt="spectacle">
             </div>
            <div class="item">
                <img class="third-slide img-fluid" src="images/slides/danse.jpg" alt="danse">
            </div>
            <div class="item">
                <img class="fourth-slide img-fluid" src="images/slides/musee.jpg" alt="musee">
            </div>
            <div class="item">
                <img class="fifth-slide img-fluid" src="images/slides/rando.jpg" alt="rando">
            </div>
        </div>
    </div>
  </section>

<!-- Présentation -->
    <section id="presentation" class="container">
        <div class="row">
            <h1>sortir<strong>gratos</strong>.fr</h1>
            <p>sortir<strong>gratos</strong>.fr est un agenda en ligne animé par 3 passionnés. Notre mission : rechercher les bons plans sortie de la région et les partager avec vous.
            Concerts, expos, spectacles ou activités sportives, sortir<strong>gratos</strong>.fr vous dégotte les derniers lieux et évènements gratuits à ne pas manquer. </p>
        </div>
    </section>
<!-- Fin Présentation -->


<!-- Partie bandeau BOUTONS EVENEMENTS -->
    <section id="boutons-evenement" class= "container-fluid">
        <div class="row">
            <div class="col-md-6">
            <h2>Les prochains événements</h2>
            </div>
            <div class="col-md-6">

<!--    TODO lien--><!--!!!!!!!!!AJOUTER LIENS!!!!!!!-->
            <a href="non-developpe.php">Rechercher les événements</a>
            <a href="evenements-filtres.php?tri=Aujourd'hui">Filtrer les événements</a>
            </div>
    </section>

<!-- Fin partie bandeau BOUTONS EVENEMENTS -->

<!-- Partie EVENEMENTS -->

     <section id="evenements" class="container-fluid">
            <?php
            require_once("acces-bdd.php");

            $donnees_bdd = $bdd->query("SELECT * FROM evenement WHERE `date` >= CURRENT_DATE AND `statut`= \"publié\" ORDER BY `evenement`.`date` ASC");
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