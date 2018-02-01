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

  <!-- Présentation -->
  <section id="presentation" class="container">
      <div class="row">
          <h1>Plan du site</h1>
      </div>
  </section>
  <!-- Fin Présentation -->

  <section class="container">
      <div class="row text-center">
      </div>
  </section>




  <section id="formulaire-contributeur" class="container">
      <div class="form-group row">
          <div class="col-md-offset-2 col-md-4">
              <ul class="lien">
                  <li><a href="index.php">Accueil</a>
                      <ul>
                          <li><a href="bloc-evenement.php">Événement</a></>
                          <li><a href="nouvel-evenement.php">Contribution</a><!-- Contribuer en créant un événement  -->
                              <ul>
                                  <li><a href="creation-compte.php">Création compte</a></li><!-- Création de mon compte contributeur  -->
                                  <li><a href="tableau-de-bord.php">tableau de bord</a></li> <!--erreur au niveu de la requete sql à la ligne 44 de tableau-de-bord.php -->
                                  <ul>
                                      <li><a href="mon-compte.php">Gérer mon compte</a>
                                      <li><a href="nouvel-evenement.php">Création événement</a></li>
                                  </ul>
                              </ul>
                          </li>
                          <li><a href="inscription-newsletter.php">Inscription NewsLetters</a>
                          <li><a href="mentions-legales.php">Mentions-légales</a></li>
                          <li><a href="qui-sommes-nous.php">Qui sommes nous?</a></li>
                          <li><a href="contact.php">Contact</a></li>
                          </li>
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
  
 
