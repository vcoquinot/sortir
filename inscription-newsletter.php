<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Inscription à la newsletter</title>
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
  <?php include ("menu-logo.php");
  include ("acces-bdd.php"); ?>

    <section id="introduction-inscription-newsletter" class= "container'fluid">
        <div class="col-md-12 row text-center">
        <h1>Inscription newsletter</h1>

            <!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Nous avons conçu cette newsletter comme un mail super pratique qui vous permettra de passer gratuitement de bons moments dans la région.</p>
                    <p><br/>Vous y trouverez les événements gratuits à ne pas rater et nos coups de cœur. On ne vous enverra pas de la pub, on ne la transmettra pas à des tiers et vous pourrez très simplement vous désabonner si elle ne répond pas à vos attentes.</p>
                    <p><br/>Alors, n'hésitez plus&nbsp;! Confiez-nous votre adresse mail pour la recevoir.</p>
                    </p>
                </div>
            </section>
            <!-- Fin Présentation -->
        </div>
    </section>

<!-- Formulaire -->
  <form action="traitement_newsletter.php" method="POST">

    <section id="formulaire-newsletter" class="container">
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="email"  name="email" class="form-control" placeholder="Email" value='<?php echo (isset($_POST['email'])) ? ($_POST['email']) : "" ;?> ' required>
            </div>
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom" value ='<?php echo (isset($_POST['prenom'])) ? ($_POST['prenom']) : "" ;?>' required>
            </div>
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="text"  name="nom" class="form-control" placeholder="Nom" value ='<?php echo (isset($_POST['nom'])) ? ($_POST['nom']) : "" ;?>' required>
            </div>
    </section>



    <!-- Inscription newsletter -->
    <?php include ("newsletter.php");?>


  <!-- Acceptation CGU -->
  <section id="CGU" class="container">
      <div class="label-group row">
          <label class="custom-control custom-checkbox col-md-offset-3 col-md-5 text-center">
              <a href="mentions-legales.php" target="_blank"><span class="custom-control-description">J'accepte les conditions générales&nbsp;</span></a>
              <input name="CGU" type="radio" class="custom-control-input" value="accepte">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Oui&nbsp;</span>

              <input name="CGU" type="radio" class="custom-control-input" value="refuse" checked>
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Non</span>
          </label>
      </div>
  </section>

  <!-- bouton creation compte -->
  <section id="bouton-creer-compte" class="container">
      <div class="row text-center">
          <button type="submit" class="btn btn-ligh bt_bleu">Je m'inscris</button>

      </div>
  </section>
  </form>



  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>