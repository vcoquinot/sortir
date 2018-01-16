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
  <?php include ("menu-logo.php");
  include ("acces-bdd.php");?>

  <?php //TODO mysql_real_escape_string
    if(isset($_POST['pseudo'])) 
    { 
        $pseudo = $_POST['pseudo'];
        $email= $_POST['email'];
        $nom = $_POST['nom'];
        $prenom= $_POST['prenom'];
        $psw= $_POST['psw'];
        $psw_confirm = $_POST['psw_confirm'];
        $type= $_POST['type'];
        $adresse= $_POST['adresse'];
        $cp= $_POST['cp'];
        $ville= $_POST['ville'];
        $tel= $_POST['tel'];

        if($_POST['psw_confirm'] != $_POST['psw'])
        {
            echo "les deux mots de passe doivent être identiques <br/>";
        }
        else
        {
            echo "Votre compte a bien été créé";
            //TODO enregistrement BDD
        }
    }

    //vérification password et password_confirm identiques
    
    ?>

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

            <!-- Formulaire création compte -->
    <section id="formulaire-creation-compte" class="container">
    <form method="POST">
      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="pseudo" class="form-control" type="text" placeholder="Pseudo" 
          value="<?php echo (isset($_POST['pseudo'])) ? ($_POST['pseudo']) : "" ;?>" required>
        </div>  <!-- si pseudo existe tu me le mets sinon tu mets rien-->
        <div class="col-md-offset-1 col-md-3">
          <input name="email" class="form-control" type="email" placeholder="Email" 
          value="<?php echo (isset($_POST['email'])) ? ($_POST['email']) : "" ;?>"required>
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="nom" class="form-control" type="text" placeholder="Nom" 
          value="<?php echo (isset($_POST['nom'])) ? ($_POST['nom']) : "" ;?>"required>
        </div>
        <div class="col-md-offset-1 col-md-3">
          <input name="prenom" class="form-control" type="text" placeholder="Prénom" 
          value="<?php echo (isset($_POST['prenom'])) ? ($_POST['prenom']) : "" ;?>"required>
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="psw" class="form-control" type="password" placeholder="Mot de passe" 
          value="<?php echo (isset($_POST['psw'])) ? ($_POST['psw']) : "" ;?>"required>
        </div>
      <div class="col-md-offset-1 col-md-3">
          <input name="psw_confirm" class="form-control" type="password" placeholder="Confirmer votre mot de passe" 
          value="<?php echo (isset($_POST['psw_confirm'])) ? ($_POST['psw_confirm']) : "" ;?>"required>
        </div>
      </div>
     
      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="nom_entite" class="form-control" type="text" placeholder="Nom de l'entité">
        </div>
        <div class="col-md-offset-1 col-md-3">
          <select class="form-control" name="type" 
          value="<?php echo (isset($_POST['type'])) ? ($_POST['type']) : "" ;?>"required>
              <option value="" selected>Type...</option>
              <option value="Association">Association</option>
              <option value="Collectivité">Collectivité</option>
              <option value="Entreprise">Entreprise</option>
              <option value="Particulier">Particulier</option>
          </select>  
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <textarea name="adresse" class="form-control" rows="3" placeholder="Adresse" 
          value="<?php echo (isset($_POST['adresse'])) ? ($_POST['adresse']) : "" ;?>" required></textarea>
        </div>  
        <div class="col-md-offset-1 col-md-3">
          <input name="cp" class="form-control" type="text" placeholder="CP" 
          value="<?php echo (isset($_POST['cp'])) ? ($_POST['cp']) : "" ;?>"required>
          <input name="ville" class="form-control" type="text" placeholder="Ville" 
          value="<?php echo (isset($_POST['ville'])) ? ($_POST['ville']) : "" ;?>"required>
        </div>
      </div>

      <div class="form-group row ">
        <div class="col-md-offset-2 col-md-3">
          <input name="site" class="form-control" type="text" placeholder="Site web">
        </div> 
        <div class="col-md-offset-1 col-md-3">
          <input name="tel" class="form-control" type="tel" placeholder="Téléphone" 
          value="<?php echo (isset($_POST['tel'])) ? ($_POST['tel']) : "" ;?>" required>
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