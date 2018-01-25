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
  require_once("acces-bdd.php");
  include ("fonctions.php");?>

    <section id="introduction-creation-compte" class= "container-fluid">
        <div class="col-md-12 row text-center">
            <h1>Création Compte Contributeur</h1>

<!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Créez votre compte et diffusez gratuitement vos événements sur sortir<strong>gratos</strong>.fr</p>
                    <div class="obligatoires">Les champs marqués d'une * sont obligatoires !</div>
                </div>
            </section>
<!-- Fin Présentation -->
    </section>

    <?php 
        if (!(isset($_POST['pseudo']))) 
        {
             displayFormCreationCompte();
        }
        else 
        {
            $nom = $_POST['nom']; 
            $prenom= $_POST['prenom'];
            $pseudo = $_POST['pseudo'];
            $psw = $_POST['psw'];
            $psw_confirm = $_POST['psw_confirm']; 
            $type= $_POST['type'];
            $entite= $_POST['nom_entite'];
            $adresse= $_POST['adresse'];
            $site= $_POST['site'];
            $mail= $_POST['email'];
            $tel= $_POST['tel'];
         
            $cp= $_POST['cp'];
            $ville= $_POST['ville'];
            $CGU= $_POST['CGU'];
                if ($psw != $psw_confirm)
                {
                    echo "<p class='message'>Les mots de passe ne sont pas identiques</p>";
                    displayFormCreationCompte();
                }
                else if($_POST['CGU'] != 'accepte')
                {
                    echo "<p class='message'>Vous devez accepter les conditions générales</p>";
                    displayFormCreationCompte();
                }
                else
                {
                    $bdd->exec("INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `pseudo`, `pwd`, `id_droit`, `type`, `nom_entite`, `id_adresse`, `site`, `mail`, `tel`, `id_newsletter`) VALUES (NULL, '$nom', '$prenom', '$pseudo', '$pwd', '1', '$type', '$nom_entite', '1', '', '$mail', '00', '4');");
                    
                    //verifier erreur BDD
                   print_r($bdd->errorInfo());

                    //header('Location:tableau-de-bord.php'); 
                } 
        }







            
           
        
    ?>


  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>