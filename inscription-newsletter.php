<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/inscription-newsletter</title>
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

    <section id="introduction-inscription-newsletter" class= "container'fluid">
        <div class="col-md-12 row text-center">
        <h1>Inscription newsletter</h1>

            <!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Nous avons conçu cette newsletter comme un mail super pratique qui vous permettra de passer gratuitement de bons moments dans la région.
                    <br />Vous y trouverez :
                        <ul>
                        <li>Les événements gratuits à ne pas rater</li>
                        <li>Nos coups de coeur</li>
                    Alors, n'hésitez plus : confiez-nous votre adresse mail pour la recevoir.
                    <br /> On ne vous enverra pas de la pub, on ne la transmettra pas à des tiers et vous pourrez très simplement vous désabonner si elle ne répond pas à vos attentes.</p>
                    </p>
                </div>
            </section>
            <!-- Fin Présentation -->
        </div>
    </section>
            <!-- Formulaire -->
    <section id="formulaire-newsletter" class="container">
        <div class="row text-center">
            <p>Si vous avez déjà un compte,<a href="connexion.php">connectez-vous</a> et modifiez vos préférences depuis votre compte</p>
        </div>
        <form>
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group col-md-offset-4 col-md-3">
                <input type="text" class="form-control" placeholder="Nom">
            </div>
        
            <!-- Périodicité -->
            <div class="row text-center col-md-12">
                <span class="custom-control-description ">
                    <strong>Je souhaite recevoir la newsletter</strong>
                </span>
                <label >
                    <input name="radio" type="radio" class="custom-control-input" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description ">Toutes les semaines</span>
                </label>
                <label>
                    <input name="radio" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description ">À chaque événement</span>
                </label>
                <div class="label-group row">
                    <label class="custom-control custom-radio">
                    <input name="radio" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <a href="mentions-legales.php"><span class="custom-control-description ">J'accepte les conditions générales</span></a>
                </div>
                <div>
                <button type="submit" class="btn btn-light">Je m'inscris</button>
                <div>
            </div>
        </form>     
    </section>

    
   