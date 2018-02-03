<?php
//verification session ouverte
if (!(isset($_POST['pseudo'])))
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos.fr / Plan du site</title>
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

  <div class="col-md-12 row text-center">
      <h1>Plan du site</h1>
  </div>

  <div class="col-md-12">
      <p class="spacer"></p>
  </div>


  <section class="container">
      <div class="form-group row">
          <div class="col-md-offset-2 col-md-4 planDuSite">
            <ul class="liPlanSite">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="evenements-filtres.php">Filtrer les événements</a></>
                <li><a href="non-developpe.php">Rechercher les événement</a></>
                <li><a href="connexion.php">Contribution/Connexion</a>
                <ul class="liPlanSite2">
                    <li><a href="creation-compte.php">Création un compte</a>
                    <li><a href="tableau-de-bord.php">Tableau de bord</a></li>
                    <ul class="liPlanSite3">
                        <li><a href="nouvel-evenement.php">Créer un événement</a></li>
                        <li><a href="mon-compte.php">Gérer mon compte</a></li>
                    </ul>
                </ul>
                </li>
                <li><a href="inscription-newsletter.php">Inscription NewsLetters</a>
                <li><a href="qui-sommes-nous.php">Qui sommes nous ?</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="mentions-legales.php">Mentions légales/CGU</a></li>
                <li><a href="plan_site.php">Plan du site</a></li>
                <li><a href="non-developpe.php"><i class="fa fa-facebook-square fa-lg"></i></a></li>
            </ul>

          </div>
          <div class="col-md-4">
              <img class="visuel_plan_site" src= "./images/visuel_plan_site.jpg" alt="Le site">

          </div>
      </div>
  </section>











<section>

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
  
 
