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
    <title>sortirgratos.fr / Nous contacter</title>
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

    <section id="introduction-contact" class="container-fluid">

      <div class="col-md-12 row text-center">
          <h1>Nous contacter</h1>

<!-- Présentation -->
          <div id="presentation" class="container">
              <div class="row">
                  <p>Si vous avez des questions, des suggestions n'hésitez pas à nous envoyer un message, nous ne manquerons pas de vous répondre.</p>
              </div>
          </div>
      </div>
    </section>

<!-- Fin Présentation -->

    <section id="formulaire-creation-compte" class="container">

    <form action="non-developpe.php" method="POST">
      <div class="form-horizontal">
        <div class="form-group row">
          <div class="col-md-offset-3 col-md-3">
            <input name="nom" class="form-control" type="text" placeholder="Nom" required>
          </div>
          <div class="col-md-3">
           <input name="mail" class="form-control" type="email" placeholder="Mail" required>
          </div>
        </div>

        <div class="form-group row ">
          <div class="col-md-offset-3 col-md-6">
            <textarea name="message" class="form-control" placeholder="Votre message" rows="8" required></textarea>
          </div>
            <div class="col-md-offset-3 col-md-6 text-center">
                <button type="submit" class="btn btn-light bt_bleu">Envoyer</button>
            </div>
        </div>
      </div>
      </form>

    </section>



<!-- Footer -->
    <?php include ("footer.php");?>
<!-- Fin Footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html