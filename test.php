<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Test upload</title>
<!--    <link href="main.css"  type="text/css" rel="stylesheet">-->
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

<!--<form method="POST" enctype="multipart/form-data" action="traitement-test">-->
    <form action="traitement-test.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
<!--    <img id="visuel_evenement" src="images/image-grise.jpg" alt="image-grisée" title="Visuel de l'image"><!--270*140p-->-->
<!---->
<!---->
<!--    <label for="file_image" class="btn btn-light bt_bleu" title="Cliquez sur ce bouton pour télécharger le visuel de l'événement">Télecharger une image* (JPG, PNG | max. 300 Ko)</label>-->
<!--    <input type="hidden" name="MAX_FILE_SIZE" value="3072" />-->
<!--    <input id="file_image" name="file_image" class="input-file" type="file">-->



    <!-- bouton création événement -->
<!--    <div class="row text-center col-md-offset-2 col-md-7">-->
<!--        <button type="submit" class="btn btn-ligh bt_bleu">Créer l'événement</button>-->
<!--    </div>-->

<!--  Javascript pour affichage image téléchargée  -->
<script type="text/javascript" src="gestion_image.js"></script>

<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html