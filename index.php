<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de réferencement des évènements gratuits dans les départements du l'Aude, du Gard, de l'Hérault, de la Lozère et des Pyrénées-Orientales">
    <title>Sortirgratos / Les évènements gratuits dans votre région</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

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

    <?php include ("menu.php");?>

<!-- Caroussel size slides: 650*433-->
    <section id="slides" class="container-fluid">
        <div class="carousel slide" data-ride="carousel" id="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0"class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>
          <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide img-fluid" src="images/slides/salle-logo.png" alt="salle">
            </div>
            <div class="item">
                <img class="second-slide img-fluid" src="images/slides/spectacle.jpg" alt="spectacle">
             </div>
            <div class="item">
                <img class="third-slide img-fluid" src="images/slides/danse.jpg" alt="danse">
            </div>
            <div class="item">
                <img class="fourth-slide img-fluid" src="images/slides/musee.jpg" alt="musee">
            </div>
            <div class="item">
                <img class="fifth-slide img-fluid" src="images/slides/rando.jpg" alt="rando">
            </div>
        </div>
    </div>
  </section>

<!-- Présentation -->
    <section id="presentation" class="container">
        <div class="row">
            <h1>sortir<strong>gratos</strong>.fr</h1>
            <p>Sortir Gratos est un agenda en ligne animé par 3 passionnés. Notre mission : rechercher les bons plans sortie de la région et les partager avec vous.
            Concerts, expos, spectacles ou activités sportives, Sortir Gratos vous dégotte les derniers lieux et évènements gratuits à ne pas manquer. </p>
        </div>
    </section>
<!-- Fin Présentation -->


<!-- Partie bandeau BOUTONS EVENEMENTS -->
    <section id="boutons-evenement" class= "container-fluid">
        <div class="row">
            <div class="col-md-6">
            <h2>Les prochains événements</h2>
            </div>
            <div class="col-md-6">

<!--    TODO lien--><!--!!!!!!!!!AJOUTER LIENS!!!!!!!-->
            <a href="#">Rechercher les événements</a>
            <a href="evenements-filtres.php">Filtrer les événements</a>
            </div>
    </section>

<!-- Fin partie bandeau BOUTONS EVENEMENTS -->

<!-- Partie EVENEMENTS -->

<!-- Partie provisoire simulation données de la base -->
    <?php {
        $titre = "Vernissage œuvres de Franck Célaire et dégustation de vin « Mas des armes »";
        $categorie = "Exposition";
        $date = "23 janvier 2018";
        $heure = "15:30";
        $public = "Adulte";
        $lieu = "Le Rockstore";
        $departement = "Pyrénées-Orientales";
        $visuel = "fire-2565561_960_720.jpg";
        $adresse = "20 Rue de Verdun";
        $codePostal = "34000";
        $ville = "Montpellier";
        $organisateur = "Monsieur Rame";
        $telephone = "0606060606";
        $email = "contact@rockstore.fr";
        $site = "http://www.rockstore.fr/";

        $descriptif = "L’exposition Magritte. La trahison des images propose une approche à ce jour inédite de l’œuvre de l’artiste belge René Magritte. Rassemblant les œuvres emblématiques, comme d'autres peu connues de l’artiste, provenant des plus importantes collections publiques et privées, l’exposition offre une lecture renouvelée de l’une des figures magistrales de l’art moderne.
    
    Une centaine de tableaux, de dessins, et des documents d’archives, sont réunis pour offrir au public cette approche qui s’inscrit dans la ligne des monographies que le Centre Pompidou a consacré aux figures majeures de l‘art du 20e siècle : « Edward Munch. L’œil moderne », « Matisse. Paires et séries » et « Marcel Duchamp. La peinture, même ». L’exposition Magritte. La trahison des images explore un intérêt du peintre pour la philosophie, qui culmine, en 1973, avec Ceci n’est pas une pipe que publie Michel Foucault, fruit de ses échanges avec l’artiste.
    
    Dans une conférence qu’il donne en 1936, Magritte déclare que Les affinités électives, qu’il peint en 1932, marque un tournant dans son œuvre. Ce tableau signe son renoncement à l'automatisme, à l’arbitraire du premier surréalisme. L’œuvre, qui montre un œuf enfermé dans une cage, est la première de ses peintures vouée à la résolution de ce qu’il nomme : un « problème ». Au hasard ou à la « rencontre fortuite des machines à coudre et des parapluies », succède une méthode implacable et logique, une solution apportée aux « problèmes » de la femme, de la chaise, des souliers, de la pluie… Les recherches appliquées à ces « problèmes », qui marquent le tournant « raisonnant » de l’œuvre de Magritte, ouvrent l’exposition.";
    }
    ?>

<!--    TODO boucle PHP-->

        <section id="evenements" class="container-fluid">
            <article class="evenement-block">
                <div class="evenement-description col-xs-5 col-md-5" >
                    <div class="row">
                        <div class="col-xs-7 col-md-8">
                            <h2><?php echo $titre?></h2>
                        </div>
                        <div class="col-xs-5 col-md-4">
                            <h3><?php echo $categorie ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $date ?><span> / </span><span class = "bleu"><?php echo $heure ?></span><span> / </span><?php echo $public ?></h4>
                            <h4><?php echo $lieu ?><span> / </span><span class = "bleu"><?php echo $departement ?></span></h4>
                        </div>
                    </div>

                    <img src=./images/concert.jpg alt="concert">
                    <button type="button" class="btn btn-light buttonPlus">+</button>
                </div>
            </article>

            <article class="evenement-block">
                <div class="evenement-description col-md-offset-1 col-md-5" >
                    <div class="row">
                        <div class="col-xs-9 col-md-9">
                            <h2><?php echo $titre?></h2>
                        </div>
                        <div class="col-xs-3 col-md-3">
                            <h3><?php echo $categorie ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $date ?><span> / </span><span class = "bleu"><?php echo $heure ?></span><span> / </span><?php echo $public ?></h4>
                            <h4><?php echo $lieu ?><span> / </span><span class = "bleu"><?php echo $departement ?></span></h4>
                        </div>
                    </div>

                    <img src=./images/concert.jpg alt="concert">
                    <button type="button" class="btn btn-light buttonPlus">+</button>
                </div>
            </article>
        </section>

<!-- Fin Partie EVENEMENTS -->

<!-- Footer -->
        <?php include ("footer.php");?>
<!-- Fin Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>