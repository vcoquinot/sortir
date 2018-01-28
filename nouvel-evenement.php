<?php
//verification session ouverte
require_once("securite.php");
//acces BDD
require_once("acces-bdd.php");
include ("menu-contributeur.php");
include ("fonctions.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Nouvel événement</title>
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

<section id="introduction-nouvel-evenement" class="container-fluid">

    <div class="col-md-12 row text-center">
        <h1>Création d'un nouvel évènement</h1>

        <!-- Présentation -->
        <section id="presentation" class="container">
            <div class="row">
                <p>Enregistrez votre nouvel événement à l'aide du formulaire ci-dessous.<button type="button" class="bt_aide" onclick="alert('Les informations relatives à votre événement doivent être à la fois claires et détaillées afin de retenir l’attention de votre public.\n\n ->Titre : choisissez un titre explicite, synthétique et accrocheur.\n\n->Lieu : il peut s’agir d’un lieu-dit, d’un nom de salle... (ce champ n’est pas obligatoire).\n\n->Contact et téléphone : indiquez le nom et / ou prénom d’une personne dédiée et son numéro de téléphone (ces champs ne sont  pas obligatoires).\n\n->Image : téléchargez le visuel de votre événement ou une image en rapport avec celui-ci. Comme le titre, l’image doit être explicite. Les dimensions doivent être du 400x267px.\n\n->Site web : si vous avez un site, indiquez le lien vers la page d’accueil ou vers la page de l’événement.\n\n->Descriptif : expliquez en quelques lignes ce que vous proposez.\n\n->Brouillon : à tout moment vous avez la possibilité d’enregistrer votre événement sans le publier en cliquant sur ”Brouillon” et de revenir dessus plus tard.\n\n->Créer l’événement : lorsque vous avez complété le formulaire, cliquez sur “créer l’événement”. Celui-ci sera validé après vérification puis mis en ligne. Il passera alors en statut “publié”. Vous pourrez modifier votre événement par la suite, même après publication.')">Aide</button></p>
                <div class="obligatoires">Les champs marqués d'une * sont obligatoires !</div>
        </section>
        <!-- Fin Présentation -->
    </div>
</section>


<?php

 if (!(isset($_POST['titre']))) {
     displayFormNouvelEvenement();
     }
 else {


     $adresse = addslashes(htmlspecialchars(strip_tags($_POST['adresse'])));
     $code_postal = addslashes(htmlspecialchars(strip_tags($_POST['code_postal'])));
     $ville = addslashes(htmlspecialchars(strip_tags($_POST['ville'])));

     $bdd->exec("INSERT INTO adresse (adresse, code_postal, ville) VALUES ('$adresse', '$code_postal', '$ville')");

     $id_adresse = $bdd->lastInsertId(); //récupère l'id généré par l'insertion

     $titre = addslashes(htmlspecialchars(strip_tags($_POST['titre'])));
     $categorie = addslashes(htmlspecialchars(strip_tags($_POST['categorie'])));
     $date = addslashes(htmlspecialchars(strip_tags($_POST['date'])));
     $heure = addslashes(htmlspecialchars(strip_tags($_POST['heure'])));
     $public = addslashes(htmlspecialchars(strip_tags($_POST['public'])));
     $lieu = addslashes(htmlspecialchars(strip_tags($_POST['lieu'])));
     $departement = addslashes(htmlspecialchars(strip_tags($_POST['departement'])));
     $acces_handicap = addslashes(htmlspecialchars(strip_tags($_POST['acces_handicap'])));
     $contact = addslashes(htmlspecialchars(strip_tags($_POST['contact'])));
     $tel = addslashes(htmlspecialchars(strip_tags($_POST['tel'])));
     $mail = addslashes(htmlspecialchars(strip_tags($_POST['mail'])));
     $site = addslashes(htmlspecialchars(strip_tags($_POST['site'])));

//     $file_image = addslashes(htmlspecialchars(strip_tags($_POST['file_image'])));

     $legende = addslashes(htmlspecialchars(strip_tags($_POST['legende'])));
     $descriptif = addslashes(htmlspecialchars(strip_tags($_POST['descriptif'])));
     $statut = addslashes(htmlspecialchars(strip_tags($_POST['statut'])));

     $bdd->exec("INSERT INTO `evenement`(`titre`, `categorie`, `date`, `heure`, `public`, `lieu`, `id_adresse`, `departement`, `acces_handicap`, `contact`, `tel`, `mail`, `site`, `legende`, `descriptif`, `status`) VALUES ('$titre','$categorie','$date','$heure','$public','$lieu','$id_adresse','$departement','$acces_handicap','$contact','$tel','$mail','$site','$legende','$descriptif','$statut')");

?>
     <SCRIPT LANGUAGE="JavaScript">
         alert('Votre nouvel élément à bien été créé');
     </SCRIPT>

<?php

     header('Location:tableau-de-bord.php');

 }
?>

  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

<!--  Javascript pour affichage image téléchargée  -->
    <script type="text/javascript" src="gestion_image.js"></script


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>