<?php
//verification session ouverte
//if (!(isset($_POST['pseudo'])))
//{
//    session_start();
//}

//require_once("securite.php");
//acces BDD
require_once "acces-bdd.php";
include "menu.php";
include "fonctions.php";

$id_evenement = "$_GET[id_evenement]";
$donnees_bdd = $bdd->query("SELECT * FROM evenement, adresse WHERE evenement.id_adresse = adresse.id AND evenement.id=$_GET[id_evenement]");
$valeurs= $donnees_bdd->fetch();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos.fr / Modification d'un évènement</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">


    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.MIN.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script LANGUAGE="JavaScript">
        function RedirectionJavascript(){
            document.location.href="tableau-de-bord2.php"; //TODO changer le nom -------------------------------------------------
        }
    </script>

</head>

<body>



<section id="introduction-nouvel-evenement" class="container-fluid">

    <div class="col-md-12 row text-center">
        <h1>Modification d'un évènement</h1>

        <!-- Présentation -->
        <section id="presentation" class="container">
            <div class="row">
                <p>Modifiez votre événement à l'aide du formulaire ci-dessous.<button type="button" class="bt_aide" onclick="alert('Les informations relatives à votre événement doivent être à la fois claires et détaillées afin de retenir l’attention de votre public.\n\n ->Titre : choisissez un titre explicite, synthétique et accrocheur.\n\n->Lieu : il peut s’agir d’un lieu-dit, d’un nom de salle... (ce champ n’est pas obligatoire).\n\n->Contact et téléphone : indiquez le nom et / ou prénom d’une personne dédiée et son numéro de téléphone (ces champs ne sont  pas obligatoires).\n\n->Image : téléchargez le visuel de votre événement ou une image en rapport avec celui-ci. Comme le titre, l’image doit être explicite. Les dimensions doivent être du 400x267px.\n\n->Site web : si vous avez un site, indiquez le lien vers la page d’accueil ou vers la page de l’événement.\n\n->Descriptif : expliquez en quelques lignes ce que vous proposez.\n\n->Brouillon : à tout moment vous avez la possibilité d’enregistrer votre événement sans le publier en cliquant sur ”Brouillon” et de revenir dessus plus tard.\n\n->Modifier l’événement : lorsque vous avez complété le formulaire, cliquez sur “Enregistrer le(s) changement(s)”')">Aide</button></p>
                <div class="obligatoires">Les champs marqués d'une * sont obligatoires !</div>
        </section>
        <!-- Fin Présentation -->
    </div>
</section>


<!-- ***************************************   -->
<!-- Formulaire Modifier Evenement -->
<!-- ***************************************   -->
<section id="formulaire-nouvel-evenement" class="container">

    <form method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <input type="text" class="form-control" placeholder="Titre de l'événement*" name="titre" title="Titre de l'événement" value="<?php echo $valeurs['titre'] ;?>" required>
            </div>

            <div class="col-md-offset-2 col-md-4">
                <select name="categorie" class="form-control" title="Catégorie dans laquelle l'événement va apparaître" required>
                    <option value="Atelier" <?php if ($valeurs['categorie']=="Atelier") {echo "selected" ;} ?> >Atelier</option>
                    <option value="Cinéma" <?php if ($valeurs['categorie']=="Cinéma") {echo "selected" ;} ?> >Cinéma</option>
                    <option value="Conférence" <?php if ($valeurs['categorie']=="Conférence") {echo "selected" ;} ?> >Conférence</option>
                    <option value="Danse" <?php if ($valeurs['categorie']=="Danse") {echo "selected" ;} ?> >Danse</option>
                    <option value="Expo" <?php if ($valeurs['categorie']=="Expo") {echo "selected" ;} ?> >Expo</option>
                    <option value="Festival" <?php if ($valeurs['categorie']=="Festival") {echo "selected" ;} ?> >Festival</option>
                    <option value="Fête" <?php if ($valeurs['categorie']=="Fête") {echo "selected" ;} ?> >Fête</option>
                    <option value="Foire" <?php if ($valeurs['categorie']=="Foire") {echo "selected" ;} ?> >Foire</option>
                    <option value="Musée" <?php if ($valeurs['categorie']=="Musée") {echo "selected" ;} ?> >Musée</option>
                    <option value="Musique" <?php if ($valeurs['categorie']=="Musique") {echo "selected" ;} ?> >Musique</option>
                    <option value="Salon" <?php if ($valeurs['categorie']=="Salon") {echo "selected" ;} ?> >Salon</option>
                    <option value="Sport" <?php if ($valeurs['categorie']=="Sport") {echo "selected" ;} ?> >Sport</option>
                </select>
            </div>

            <div class="col-md-4">
                <select name="public" class="form-control" title="À qui s'adresse l'événement" required>
                    <option value="Tout public" <?php if ($valeurs['public']=="Tout public") {echo "selected" ;} ?> >Tout public</option>
                    <option value="Enfant" <?php if ($valeurs['public']=="Enfant") {echo "selected" ;} ?> >Enfant</option>
                    <option value="Ado" <?php if ($valeurs['public']=="Ado") {echo "selected" ;} ?> >Ado</option>
                    <option value="Adulte" <?php if ($valeurs['public']=="Adulte") {echo "selected" ;} ?> >Adulte</option>
                </select>
            </div>

            <div class="col-md-offset-2 col-md-4">
                <input name="date" type="date" class="form-control" placeholder="Date*" title="Date de l'événement" value="<?php echo $valeurs['date'] ;?>" required>
            </div>

            <div class="col-md-4">
                <input name="heure" type="time" class="form-control" placeholder="Heure*" title="Heure de l'événement" value="<?php echo $valeurs['heure'] ;?>" required>
            </div>

            <div class="label-group row col-md-offset-2 col-md-8 marginTop text-center">
                <label class="custom-control-input">Accessible aux personnes à mobilitée réduite*&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="acces_handicap" value="oui" <?php if ($valeurs['acces_handicap']=="oui") {echo "checked" ;} ?> required>&nbsp;Oui</label>
                <label class="custom-control-input">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="acces_handicap" value="non" <?php if ($valeurs['acces_handicap']=="non") {echo "checked" ;} ?> >&nbsp;Non</label>
            </div>

        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>

        <div class="col-md-offset-2 col-md-8">
            <input name="lieu" type="text" class="form-control" placeholder="Lieu-dit, nom de la salle…*" title="Comment s'appelle le lieu de l'événement" value="<?php echo $valeurs['lieu'] ;?>" required>
            <input name="adresse" type="text" class="form-control" placeholder="Adresse*" title="Adresse de l'événement" value="<?php echo $valeurs['adresse'] ;?>" required>
        </div>

        <div class="col-md-offset-2 col-md-4">
            <input name="code_postal" type="text" class="form-control" placeholder="Code postal*" title="Code postal" value="<?php echo $valeurs['code_postal'] ;?>" required>
        </div>

        <div class="col-md-4">
            <input name="ville" type="text" class="form-control" placeholder="Ville*" title="Ville" value="<?php echo $valeurs['ville'] ;?>" required>
        </div>

        <div class="col-md-offset-2 col-md-4">
            <select class="form-control" name="departement" title="Département où l'événement à lieu" required>
                <option value="Aude" <?php if ($valeurs['departement']=="Aude") {echo "selected" ;} ?> >Aude (11)</option>
                <option value="Gard" <?php if ($valeurs['departement']=="Gard") {echo "selected" ;} ?> >Gard (30)</option>
                <option value="Hérault" <?php if ($valeurs['departement']=="Hérault") {echo "selected" ;} ?> >Hérault (34)</option>
                <option value="Lozère" <?php if ($valeurs['departement']=="Lozère") {echo "selected" ;} ?> >Lozère (48)</option>
                <option value="Pyrénées-Orientales" <?php if ($valeurs['public']=="Pyrénées-Orientales") {echo "selected" ;} ?> >Pyrénées-Orientales (66)</option>
            </select>
        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>

        <div class="row">

            <div class="col-md-offset-2 col-md-4">
                <textarea name="descriptif" class="form-control" rows="12" placeholder="Descriptif de l'événement*" title="Détails de l'événement" required><?php echo $valeurs['descriptif'] ;?></textarea>
            </div>

            <!-- ***************************************   -->
            <!-- Gestion téléchargement visuel événement -->
            <!-- ***************************************   -->
            <div id="visuel" class="row visuel text-center">
                <div class="col-md-4 text-center">
                    <img id="visuel_evenement" src="<?php echo $valeurs['chemin_image'] ;?>" alt="image de placement" title="Visuel de l'image"><!--270*140p-->


                    <label for="fileToUpload" class="btn btn-light bt_bleu" title="Cliquez sur ce bouton pour télécharger le visuel de l'événement">Télécharger une image*</label>
                    <input id="fileToUpload" name="fileToUpload" class="input-file" type="file" >


                    <input name="legende" type="text" class="form-control" placeholder="Légende" title="Légende du visuel (utile pour Google)" value="<?php echo $valeurs['legende'] ;?>">
                </div>


            </div>
        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>


        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <input name="contact" type="text" class="form-control" placeholder="Contact" title="Nom de la personne à contacter pour obtenir plus d'infos" value="<?php if (!($valeurs['contact']=="Contact non renseigné")) {echo $valeurs['contact'] ;} ?>">
            </div>

            <div class="col-md-4">
                <input name="tel" type="tel" class="form-control" placeholder="Téléphone" title="Téléphone du contact ou de l'organisateur" value="<?php if (!($valeurs['tel']=="Téléphone non renseigné")) {echo $valeurs['tel'] ;} ?>">
            </div>

            <div class="col-md-offset-2 col-md-4">
                <input name="mail" type="email" class="form-control" placeholder="Email" title="Email du contact ou de l'organisateur" value="<?php if (!($valeurs['mail']=="Mail non renseigné")) {echo $valeurs['mail'] ;} ?>">
            </div>

            <div class="col-md-4">
                <input name="site" type="text" class="form-control" placeholder="Site web" title="Site web de l'organisateur" value="<?php if (!($valeurs['site']=="#")) {echo $valeurs['site'] ;} ?>">
            </div>
        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>


        <div class="row">
            <div class="label-group row col-md-offset-2 col-md-8 marginTop text-center">
                <label class="custom-control-input">Statut de la publication*&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="statut" value="brouillon" <?php if ($valeurs['statut']=="brouillon") {echo "checked" ;} ?> required>&nbsp;Brouillon</label>
                <label class="custom-control-input">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="statut" value="publié" <?php if ($valeurs['statut']=="publié") {echo "checked" ;} ?> >&nbsp;Publié</label>
            </div>
        </div>



        <div class="col-md-12">
            <p class="spacer"></p>
        </div>

        <!-- bouton création événement -->
        <section id="bouton-creer-compte" class="container">
            <div class="row text-center col-md-offset-2 col-md-7">
                <button type="submit" class="btn btn-ligh bt_bleu">Enregistrer le(s) changement(s)</button>
            </div>
        </section>
    </form>

</section>


<?php

if (isset($_POST['titre'])) {

            $adresse = addslashes(htmlspecialchars(strip_tags($_POST['adresse'])));
            $code_postal = addslashes(htmlspecialchars(strip_tags($_POST['code_postal'])));
            $ville = addslashes(htmlspecialchars(strip_tags($_POST['ville'])));
            $id_adresse = $valeurs['id_adresse'];

            $bdd->exec("UPDATE adresse SET `adresse`='$adresse', code_postal='$code_postal', ville='$ville' WHERE `id`='$id_adresse'");

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

//            $chemin_image = addslashes(htmlspecialchars(strip_tags($target_file)));

            $legende = addslashes(htmlspecialchars(strip_tags($_POST['legende'])));
            $descriptif = addslashes(htmlspecialchars(strip_tags($_POST['descriptif'])));
            $statut = addslashes(htmlspecialchars(strip_tags($_POST['statut'])));
            $coup_d_coeur = "n";

//            TODO ajouter l'id_utilisateur ! ! ! ! ! ! !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $id_utilisateur = 4;

    $bdd->exec("UPDATE `evenement` SET `titre`='$titre', `categorie`='$categorie', `date`='$date', `heure`='$heure', `public`='$public', `lieu`='$lieu', `departement`='$departement', `acces_handicap`='$acces_handicap', `contact`='$contact', `tel`='$tel', `mail`='$mail', `site`='$site', `legende`='$legende', `descriptif`='$descriptif', `statut`='$statut', `coup_d_coeur`='$coup_d_coeur' WHERE `id`='$id_evenement'");


    ?>


            <script LANGUAGE="JavaScript">
                RedirectionJavascript();
            </script>


<?php
}
?>


<!-- Footer -->
<?php include ("footer.php");?>
<!-- Fin Footer -->

<!--  Javascript pour affichage image téléchargée  -->
<script type="text/javascript" src="gestion_image.js"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>