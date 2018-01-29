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

    <script LANGUAGE="JavaScript">
        function RedirectionJavascript(){
            document.location.href="tableau-de-bord.php";
        }
    </script>
  
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

    $target_dir = "images/visuels-evenements/";
    $target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "<p class='message'>Votre fichier n'est pas une image !</p>";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<p class='message'>Désolé, ce fichier exsite déjà !</p>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<p class='message'>Désolé, votre fichier est trop lourd !</p>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "<p class='message'>Désolé, seuls les fichiers JPG, JPEG, PNG sont autorisés !</p>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<p class='message'>Désolé, votre fichier n'a pas été téléchargé !</p>";
        displayFormNouvelEvenement();

        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p class='message vert'>Le fichier \"" . basename($_FILES["fileToUpload"]["name"]) . "\" a bien été téléchargé</p>";


            $adresse = addslashes(htmlspecialchars(strip_tags($_POST['adresse'])));
            $code_postal = addslashes(htmlspecialchars(strip_tags($_POST['code_postal'])));
            $ville = addslashes(htmlspecialchars(strip_tags($_POST['ville'])));

            $bdd->exec("INSERT INTO adresse (adresse, code_postal, ville) VALUES ('$adresse', '$code_postal', '$ville')");

            $id_adresse = $bdd->lastInsertId(); //récupère l'id généré par l'insertion de l'adresse

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

            $chemin_image = addslashes(htmlspecialchars(strip_tags($target_file)));

            $legende = addslashes(htmlspecialchars(strip_tags($_POST['legende'])));
            $descriptif = addslashes(htmlspecialchars(strip_tags($_POST['descriptif'])));
            $statut = addslashes(htmlspecialchars(strip_tags($_POST['statut'])));
            $coup_d_coeur = "n";

//            TODO ajouter l'id_utilisateur ! ! ! ! ! ! !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $id_utilisateur = 4;




            $bdd->exec("INSERT INTO `evenement`(`id_utilisateur`, `titre`, `categorie`, `date`, `heure`, `public`, `lieu`, `id_adresse`, `departement`, `acces_handicap`, `contact`, `tel`, `mail`, `site`, `chemin_image`, `legende`, `descriptif`, `statut`, `coup_d_coeur`) VALUES ('$id_utilisateur', '$titre', '$categorie', '$date', '$heure', '$public', '$lieu', '$id_adresse', '$departement', '$acces_handicap', '$contact', '$tel' ,'$mail', '$site', '$chemin_image', '$legende', '$descriptif', '$statut', '$coup_d_coeur')");


            echo "<p class='message vert'>Le nouvelle événement à bien été créé";

            ?>


            <script LANGUAGE="JavaScript">
                setTimeout('RedirectionJavascript()', 3000);
            </script>

            <?php

        } else {
            echo "<p class='message'>Désolé, il y a eu une erreur de téléchargement !</p>";
            displayFormNouvelEvenement();

        }
    }

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