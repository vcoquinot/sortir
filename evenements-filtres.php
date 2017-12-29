<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ssortirgratos.fr / Événements filtrés</title>
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

  <?php include ("menu.php");?>

  <section id="introduction-evenements-filtres" class="container-fluid">
      <div class="col-md-12 row text-center">
          <h1>Les événements filtrés</h1>
      </div>
  </section>

<!-- Présentation -->
      <section id="presentation" class="container">
          <div class="row">
              <p>À l'aide des boutons ci-dessous vous allez pouvoir filtrer les événements.</p>
          </div>
      </section>
<!-- Fin Présentation -->

<!--TODO gestion de l'intitulé par une variable $tri-->
      <?php $tri = "Événements du jour" ?>

<!-- Partie bandeau BOUTONS EVENEMENTS -->
  <section id="boutons-evenement" class= "container-fluid">
      <div class="row">
          <div class="col-md-6">
              <h2><?php echo $tri ?></h2>
          </div>
          <div class="col-md-6">

          <!--    TODO lien--><!--!!!!!!!!!AJOUTER LIENS!!!!!!!-->

              <button class="boutons-filtres" type="button" >Par public</button>
              <button class="boutons-filtres" type="button" >Par catégorie</button>

              <button class="boutons-filtres" type="button" >Par département</button>
              <button class="boutons-filtres" type="button" >Du mois</button>
              <button class="boutons-filtres" type="button" >De la semaine</button>
              <button class="boutons-filtres" type="button" >Du jour</button>

          </div>
  </section>

  <!-- Fin partie bandeau BOUTONS EVENEMENTS -->


    <section id="boutons-block" class="container">

    </section>




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

        $descriptif = "Xxxxxxxxx xxxx x x x xxxxxxx x x xxxxxxxx";
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