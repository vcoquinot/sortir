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
  include ("acces-bdd.php");
  include ("fonctions.php");?>

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

    <?php displayFormCreationCompte();
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