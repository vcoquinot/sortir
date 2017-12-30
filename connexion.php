<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Connexion</title>
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
    <?php include ("menu-logo.php");?>

    <section id="introduction-contributeur" class= "container'fluid">
      <div class="col-md-12 row text-center">
      <h1>Connexion contributeur</h1>

          <!-- Présentation -->
          <section id="presentation" class="container">
              <div class="row">
                  <p>Si vous voulez contribuer (annoncer vos événements), créez votre compte.</p>
                  <p>Si vous avez déjà un compte, entrez votre pseudo et votre mot de passe, puis cliquez sur connexion.</p>
              </div>
          </section>
          <!-- Fin Présentation -->
    </section>

    <form action="X------------------------------------------X.php" target="_blank" method="POST">
        <section id="formulaire-contributeur" class="container">
          <div class="form-horizontal">
            <div class="form-group row">
              <div class="col-md-offset-3 col-md-3">
                <input name="pseudo" class="form-control" type="text" placeholder="Pseudo">
              </div>
              <div class="col-md-3">
                <input name="password" class="form-control" type="password" placeholder="Mot de passe">
                <small><a href="#" >Mot de passe oublié</a></small>
              </div>
            </div>
          </div>

          <div class="form-horizontal">
              <div class="form-group row">
                  <div id="boutons-contributeur" class= "container">
                      <div class="col-md-12 row text-center">
                      <button type="submit" class="btn btn-light bt_bleu">Connexion</button>
                      </div>
                  </div>
              </div>
          </div>
        </section>
    </form>


    <div class="col-md-12 row text-center fond_blanc">
        <h3> Envie de devenir contributeur ?</h3>
        <a href="creation-compte.php" class="lien_bleu font_roboto">Créer un compte</a>
      </div>



    <!-- Footer -->
    <?php include ("footer.php");?>
    <!-- Fin Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>