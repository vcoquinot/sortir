<?php
//verification session ouverte
    if (!(isset($_POST['pseudo'])))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de réferencement des évènements gratuits dans les départements du l'Aude, du Gard, de l'Hérault, de la Lozère et des Pyrénées-Orientales">
    <title>Sortirgratos / Fonctionnalités non développées</title>

    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">

<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<?php include ("menu.php");?>

<!-- Présentation -->
<section id="presentation" class="container">
    <div class="row">
        <h1>Fonctionnalités <strong>non</strong> développées</h1>
        <p>Par manque de temps ou de compétences les fonctions ci-dessous n'ont pas été développées&nbsp;!</p>
    </div>
</section>

<section>
    <div  class="row">
        <div class="col-md-12 text-center">
            <p class="spacer"></p>
        </div>
        <div class="col-md-offset-3 col-md-6">
            <ul>
                <li>Mot de passe oublié</li>
                <li>Rechercher les événements</li>
                <li>Partie Administrateur</li>
                <li>Gérer mon compte</li>
                <li>Plan du site</li>
                <li>Boutons : Supprimer, Dupliquer dans le tableau de bord Contributeur</li>
                <li>À la création d'un compte Contributeur, envoi d'un email récapitulatif au contributeur qui vient de s'inscrire et à l'administrateur</li>
                <li>Conservation de la mise en forme (passage à la ligne) dans la description d'un événement</li>
                <li>Traitement du formulaire de contact</li>
                <li>Plus tout ce que l'on aurait aimé développer…</li>
            </ul>
        </div>
        <div  class="row">
        <div class="col-md-12 text-center">
            <p class="spacer"></p>
        </div>
        <div class="col-md-offset-3 col-md-6">
            <h2>Liste des fonctionnalités évoquées pour une V2</h2>
            <ul>
                <li>Bouton Partager l'événement sur Facebook</li>
                <li>Gestion des événements récurrents</li>
                <li>Carte des événements géolocalisés</li>
                <li>Calendrier des événements</li>
                <li>Gestion des cookies</li>
                <li>Alerte événement</li>
                <li>Événement coup de cœur</li>
                <li>Balise Google Analytics</li>
                <li>WCAG Web Content Accessibility Guidelines</li>
                <li>Étendre le service à l’Occitanie , voire au territoire français</li>
                <li>Évoquer l’utilité d’une application mobile</li>
            </ul>
        </div>

    </div>
</section>
<!-- Fin Présentation -->

<!-- Footer -->
    <?php include ("footer.php");?>
<!-- Fin Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>