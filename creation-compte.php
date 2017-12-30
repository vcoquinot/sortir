<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Creation compte</title>
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

    <section id="introduction-creation-compte" class= "container-fluid">
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

  <form action="X------------------------------------------X.php" method="POST">

            <!-- Formulaire création compte -->
    <section id="formulaire-creation-compte" class="container">
      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="pseudo" class="form-control" type="text" placeholder="Pseudo" required>
        </div>  
        <div class="col-md-offset-1 col-md-3">
          <input name="mail" class="form-control" type="mail" placeholder="Mail" required>
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="nom" class="form-control" type="text" placeholder="Nom" required>
        </div>
        <div class="col-md-offset-1 col-md-3">
          <input name="prenom" class="form-control" type="text" placeholder="Prénom" required>
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="psw" class="form-control" type="password" placeholder="Mot de passe" required>
        </div>
      <div class="col-md-offset-1 col-md-3">
          <input name="psw_confirm" class="form-control" type="password" placeholder="Confirmer votre mot de passe" required>
        </div>
      </div>
     
      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="nom_entite" class="form-control" type="text" placeholder="Nom de l'entité">
        </div>
        <div class="col-md-offset-1 col-md-3">
          <select id="Type" class="form-control" name="type">
              <option value="non definie" selected>Type...</option>
              <option value="Association">Association</option>
              <option value="Collectivité">Collectivité</option>
              <option value="Entreprise">Entreprise</option>
              <option value="Particulier">Particulier</option>
          </select>  
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <textarea name="adresse" class="form-control" rows="3" placeholder="Adresse"></textarea>
        </div>  
        <div class="col-md-offset-1 col-md-3">
          <input name="cp" class="form-control" type="text" placeholder="CP">
          <input name="ville" class="form-control" type="text" placeholder="Ville">
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="site" class="form-control" type="text" placeholder="Site web">
        </div> 
        <div class="col-md-offset-1 col-md-3">
          <input name="tel" class="form-control" type="text" placeholder="Téléphone">
        </div>
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
        <button type="submit" class="btn btn-ligh bt_bleu">Je crée mon compte</button>
      </div>
    </section>
  </form>
  <!-- Fin formulaire -->



  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>