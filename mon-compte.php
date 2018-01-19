<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/mon compte</title>
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
    <?php include ("menu-contributeur.php");?>

    <section id="introduction-creation-compte" class= "container-fluid">
        <div class="col-md-12 row text-center">
            <h1>Mon compte</h1>

            <!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Modifiez votre profil puis cliquez sur “Modifiez mes préférences”</p>
                </div>
            </section>
            <!-- Fin Présentation -->

    </section>


    <!-- Formulaire création compte -->
    <section id="formulaire-creation-compte" class="container">
        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <input class="form-control" type="text" placeholder="Pseudo">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input class="form-control" type="mail" placeholder="Mail">
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <input class="form-control" type="text" placeholder="Nom">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input class="form-control" type="text" placeholder="Prénom">
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <input class="form-control" type="password" placeholder="Mot de passe">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input class="form-control" type="password" placeholder="Confirmer votre mot de passe">
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <input class="form-control" type="text" placeholder="Nom de l'entité">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <select id="Type" class="form-control">
                    <option selected>Type</option>
                    <option>Association</option>
                    <option>Collectivité</option>
                    <option>Entreprise</option>
                    <option>Particulier</option>
                </select>
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <textarea class="form-control" rows="3" placeholder="Adresse"></textarea>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input class="form-control" type="number" placeholder="CP">
                <input class="form-control" type="text" placeholder="Ville">
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-2 col-md-3">
                <input class="form-control" type="text" placeholder="Site web">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input class="form-control" type="number" placeholder="Téléphone">
            </div>
        </form>
    </section>
    <!-- Fin formulaire -->

    <!-- Inscription newsletter -->
    <?php include ("newsletter.php");?>




    <!-- bouton creation compte -->
    <section id="bouton-creer-compte" class="container">
        <div class="row text-center">
            <button type="submit" class="btn btn-ligh bt_bleu">Modifiez mes préférences</button>
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