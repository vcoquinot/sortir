<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/tableau-de-bord</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

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
  <?php include ("menu-contributeur.php");?>

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
              <a href="#" class="lien_bleu font_roboto">Gérer mon compte</a>
              </div>
          </section>
          <!-- Fin Partie bandeau BOUTONS -->

      </div>
  </section>



  <!-- Partie mes événements -->

  </section>
  <section id="en-tete-mes-evenements" class= "container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2>Mes événements</h2>
          </div>
  </section>


  <section id="mes-evenements" class="container">
      <div class= "mes-evenements-block">
          <div class="row">
              <div class="col-md-5">
                  <h3>Titre</h3>
              </div>
              <div class="col-offset-md-3 col-md-3">
                  <h3>Date</h3>
              </div>
              <button type="button" class="btn btn-light">Modifier</button>
          </div>
          <div class="row">
              <div class="col-md-8">
                  <h3>Catégorie</h3>
              </div>
              <button type="button" class="btn btn-light">Supprimer</button>
          </div>
          <div class="row">
              <div class="col-md-8">
                  <h3>Public</h3>
              </div>
              <button type="button" class="btn btn-light">Dupliquer</button>
          </div>
      </div>
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