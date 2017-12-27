<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/creation-compte</title>
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

    <section id="introduction-creation-compte" class= "container'fluid">
        <div class="col-md-12 row text-center">
            <h1>Création Compte Contributeur</h1>

            <!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Créez votre compte et diffusez gratuitement vos événements sur sortir<strong>gratos</strong>.fr</p>
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
          <input class="form-control" type="password" placeholder="Mot de passe">
        </div>
      </form>
     
      <form class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <select id="Type" class="form-control">
            <option selected>Type</option>
            <option>Association</option>
            <option>Collectivité</option>
            <option>Entreprise</option>
            <option>Particulier</option>
          </select>
        </div>
        <div class="col-md-offset-1 col-md-3">
          <input class="form-control" type="text" placeholder="Nom de l'entité">
        </div>
      </form> 
     
      <form class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input class="form-control" type="text" placeholder="Site web">
        </div>
        <div class="col-md-offset-1 col-md-3">
          <input class="form-control" type="mail" placeholder="Mail">
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
          <input class="form-control" type="text" placeholder="Nom">
        </div>
        <div class="col-md-offset-1 col-md-3">
          <input class="form-control" type="text" placeholder="Prénom">
        </div>
      </form> 
       
      <form class="form-group row ">
        <div class="col-md-offset-6 col-md-3">
          <input class="form-control" type="number" placeholder="Téléphone">
        </div>
      </form>
    </section>
          <!-- Fin formulaire -->

          <!-- Inscription newsletter -->
          <?php include ("inscription-newsletter.php");?>

      <!-- Acceptation CGU -->
    <section id="CGU" class="container">
      <div class="label-group row">
        <label class="custom-control custom-radio col-md-offset-2 col-md-4">
        <input name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <a href="mentions-legales.php"><span class="custom-control-description ">J'accepte les conditions générales</span></a>
        </label>
      </div>
    </section>
      <!-- Acceptation CGU -->

      <!-- bouton creation compte -->
    <section id="bouton-creer-compte" class="container">
      <div class="row text-center">
        <button type="button" class="btn btn-light">Je crée mon compte</button>
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