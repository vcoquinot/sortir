<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos / Nous contacter</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <?php include ("menu-logo.php");?>

    <section id="introduction-contact" class="container-fluid">

      <div class="col-md-12 row text-center">
          <h1>Nous contacter</h1>

          <!-- Présentation -->
          <section id="presentation" class="container">
              <div class="row">

                  <p>Si vous avez des questions, des suggestions n'hésitez pas à nous envoyer un message, nous ne manquerons pas de vous répondre.</p>
              </div>
          </section>
          <!-- Fin Présentation -->

        <section id="formulaire-creation-compte" class="container">
          <form class="form-horizontal">
            <div class="form-group row"><!--voir si formGroupInputMedium necessaire ?? -->
              <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="nom" id="formGroupInputNom" placeholder="Nom">
              </div>
              <div class="col-md-3">
               <input class="form-control" type="email" id="formGroupInputEmail" placeholder="Mail">
              </div>
            </div>

          <form class="form-horizontal">
            <div class="form-group row ">
              <div class="col-md-offset-3 col-md-6">
                <textarea class="form-control" id="FormControlTextarea" placeholder="Votre message" rows="8"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-light bt_bleu">Envoyer</button>
          </form>
          </form>
        </section>
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