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
    <?php include ("menu-contributeur.php");?>


    <section id="introduction-nouvel-evenement" class="container-fluid">

        <div class="col-md-12 row text-center">
            <h1>Création d'un nouvel évènement</h1>

            <!-- Présentation -->
            <section id="presentation" class="container">
                <div class="row">
                    <p>Enregistrez votre nouvel événement à l'aide du formulaire ci-dessous.<button type="button" class="bt_aide" onclick="alert('Texte aide à rédiger')">Aide</button></p>
            </section>
        </div>
    </section>
    <!-- Fin Présentation -->

    <section id="formulaire-nouvel-evenement" class="container">
    <form  action="traitement_nouvel_evenement.php" method="POST">
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Titre de l'événement" name="titre" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                <select name="categorie" class="form-control" required>
                    <option value="" selected>Catégorie...</option>
                    <option value="Atelier">Atelier</option>
                    <option value="Cinéma">Cinéma</option>
                    <option value="Conférence">Conférence</option>
                    <option value="Danse">Danse</option>
                    <option value="Expo">Expo</option>
                    <option value="Festival">Festival</option>
                    <option value="Fête">Fête</option>
                    <option value="Foire">Foire</option>
                    <option value="Musée">Musée</option>
                    <option value="Musique">Musique</option>
                    <option value="Salon">Salon</option>
                    <option value="Sport">Sport</option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-offset-6 col-md-3">
                    <select name="public" class="form-control"  required>
                        <option value="" selected>Public...</option>
                        <option value="Tout public">Tout public</option>
                        <option value="Enfant">Enfant</option>
                        <option value="Ado">Ado</option>
                        <option value="Adulte">Adulte</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input name="date" type="date" class="form-control" placeholder="Date" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input name="heure" type="time" class="form-control" placeholder="Heure" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input name="lieu" type="text" class="form-control" placeholder="Lieu">
                    <input name="adresse" type="text" class="form-control" placeholder="Adresse" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                <input name="cp" type="text" class="form-control" placeholder="Code postal" required>
                    <input name="ville" type="text" class="form-control" placeholder="Ville" required>
                    <select class="form-control" name="departement" required>
                        <option value="" selected>Département...</option>
                        <option value="Aude (11)">Aude (11)</option>
                        <option value="Gard (30)">Gard (30)</option>
                        <option value="Hérault (34)">Hérault (34)</option>
                        <option value="Lozère (48)">Lozère (48)</option>
                        <option value="Pyrénées-Orientales (66)">Pyrénées-Orientales (66)</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input name="contact" type="text" class="form-control" placeholder="Contact">
                </div>
                <div class="col-md-offset-1 col-md-3">
                <input name="tel" type="tel" class="form-control" placeholder="Téléphone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input name="site" type="text" class="form-control" placeholder="Site web">
                </div>
            </div>
            <div id="visuel" class="row visuel text-center">
                <div class="col-md-offset-2 col-md-3 text-center">
                    <img src="images/image-grise.jpg" alt="image-grisée" width=260px ><!--270*140p-->
                    <button type="file" class="btn btn-light bt_bleu">Télecharger une image</button>
                    <input name="legende" type="text" class="form-control" placeholder="Légende">
                </div> 
                <!--TODO  taille image à télécharger + verif script?? + JS-->
                        <!--<input id="input-dim-4" name="input-dim-4[]" multiple type="file" accept="image/*">
                    <script> 
                    $("#input-dim-1").fileinput({
                        uploadUrl: "/file-upload-batch/2",
                        allowedFileExtensions: ["jpg", "png", "gif"],
                        minImageWidth: 50,
                        minImageHeight: 50
                    });
                    </script>-->
                <div class="col-md-offset-1 col-md-3">
                    <textarea name="descriptif" class="form-control" rows="11" placeholder="Descriptif de l'événement" required></textarea>
                </div> 
            </div>                   
            <div class="label-group row">
                <span class="custom-control-description col-md-offset-2 col-md-2 marginTop"><strong>Accès handicapé</strong></span>
                <label class="custom-control custom-radio col-md-1 marginTop">
                    <input name="handicape" type="radio" class="custom-control-input" value="oui" required >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Oui</span>
                </label>
                <label class="custom-control custom-radio col-md-1 marginTop">
                    <input name="handicape" type="radio" class="custom-control-input" value="non">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Non</span>
                </label>
            </div>
            </form>
    </section>

      <!-- Statut événement -->
      <section id="statut-evenement" class="container marginTop">
      <div class="label-group row">
        <span class="custom-control-description col-md-offset-2 col-md-2"><strong>Statut</strong></span>
        <label class="custom-control custom-radio col-md-2">
          <input name="statut" type="radio" class="custom-control-input" value="brouillon">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Brouillon</span>  
          </label>
        <label class="custom-control custom-radio col-md-2">
          <input name="statut" type="radio" class="custom-control-input" value="publié" checked>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Publié</span>
        </label>
<!-- TODO à utiliser pour formulaire mode édition        
        <label class="custom-control custom-radio col-md-2">
          <input name="statut" type="radio" class="custom-control-input" value="refusé" disabled>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Refusé</span>
        </label> -->
      </div>

          <!-- bouton création événement -->
    <section id="bouton-creer-compte" class="container">
      <div class="row text-center col-md-offset-2 col-md-7">
        <button type="submit" class="btn btn-ligh bt_bleu">Créer l'événement</button>
      </div>
    </section>
    </form>
</section>




  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>