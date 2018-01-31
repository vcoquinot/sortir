<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Connexion</title>
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
    include ("fonctions.php");
    require_once("acces-bdd.php")?>

    <section id="introduction-contributeur" class= "container'fluid">
      <div class="col-md-12 row text-center">
      <h1>Connexion contributeur</h1>

          <!-- Présentation -->
          <section id="presentation" class="container">
              <div class="row">
                  <p>Si vous voulez contribuer (annoncer vos événements), créez votre compte.</p>
                  <p>Si vous avez déjà un compte, entrez votre pseudo et votre mot de passe, puis cliquez sur connexion.</p>
              </div>
          </section>
          <!-- Fin Présentation -->
    </section>

    <?php 
               if (!(isset($_POST['pseudo']))) 
               {
                    displayFormConnexion();
               }
               else
               {
                 $pseudo= $_POST['pseudo'];
                 $password= md5($_POST['password']); // gratos ou contributeur
       
                 $donneebdd_pseudo = $bdd->query("SELECT pseudo FROM utilisateur WHERE pseudo = '$pseudo'");
                 
       
                 //VERIF SI PSEUDO EXISTE DANS BDD
       
                 $donnee_pseudo = $donneebdd_pseudo->fetch();
                 $donneebdd_pseudo->closeCursor();
           
                 if ($pseudo == $donnee_pseudo['pseudo'])
                 {
                     //VERIF SI PWD CORRECT + SI PWD ASSOCIE AU PSEUDO
                     $donneebdd_pwd = $bdd->query("SELECT pwd FROM utilisateur WHERE pwd = '$password' AND pseudo = '$pseudo'");
                     $donnee_pwd = $donneebdd_pwd->fetch(); 
                     $donneebdd_pwd->closeCursor();
                     //$donneebdd_user = $bdd->query("SELECT id FROM utilisateur WHERE pwd = '$password' AND pseudo = '$pseudo'");
                     //$donnee_user = $donneebdd_user->fetch();
                     //$donneebdd_user->closeCursor();
                     
                         if($password == $donnee_pwd['pwd'])
                         {

                           $_SESSION['pseudo']=$pseudo;//pseudo
                           header('Location:tableau-de-bord.php');
                         }
                         else
                         {
                             echo "<p class='message'>Mot de passe incorrect</p>";
                             displayFormConnexion();
                         }
                 }
                 else
                 {
                     echo "<p class='message'>Ce&nbsp;pseudo n'existe pas</p>";
                     displayFormConnexion();
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