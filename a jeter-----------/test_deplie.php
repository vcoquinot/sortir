<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de réferencement des évènements gratuits dans les départements du l'Aude, du Gard, de l'Hérault, de la Lozère et des Pyrénées-Orientales">
    <title>Sortirgratos / ÉVénements gratuits dans votre région</title>
    <link href="../main.css" type="text/css" rel="stylesheet">
    <link href="../modal.css" type="text/css" rel="stylesheet">
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
</head>

<body>



<!-- Partie EVENEMENTS -->

<section id="evenements" class="container-fluid">
    <?php
    require_once("acces-bdd.php");

    $donnees_bdd = $bdd->query("SELECT * FROM evenement, adresse WHERE evenement.id_adresse = adresse.id ORDER BY `evenement`.`date` ASC");
//    include ("test-bloc-deplie.php");
    include("bloc-deplie-large.php");
    ?>
</section>

<!-- Fin Partie EVENEMENTS -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
