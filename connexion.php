<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos / Connexion</title>
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
    <?php include ("menu-logo.php");?>

    <section id="introduction-contributeur" class= "container'fluid">
      <div class="col-md-12 row text-center">
      <h1>Connexion contributeur</h1>
          <!-- Présentation -->
          <section id="presentation" class="container">
              <div class="row">

                  <p>Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis</p>
              </div>
          </section>
          <!-- Fin Présentation -->
    </section>

    <section id="formulaire-contribueur" class= "container">
      <div class="col-md-offset-3 col-md-6 row text-center">
        <form class="form-inline">
          <div class="form-group">
              <input type="text" id="inputPseudo" class="form-control" placeholder="Pseudo">
          </div>
          <div class="form-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe">
          </div>
        </form>
      </div>
    </section>

    <section id="boutons-contributeur" class= "container"><!--!!!!!!!!!AJOUTER LIENS!!!!!!!-->
      <div class="col-md-12 row text-center">
          <a href="#" class="lien_bleu">Connexion</a>
          <a href="#" class="lien_bleu">Mot de passe oublié</a>
          <a href="#" class="lien_bleu">Créer un compte</a>
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