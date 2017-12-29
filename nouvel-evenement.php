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
            <!-- Fin Présentation -->



            </div>
    </section>

    <section id="formulaire-nouvel-evenement" class="container">
        <form>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Titre de l'événement" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                <select id="categorie" class="form-control" required>
                    <option selected>Catégorie...</option>
                    <option>Atelier</option>
                    <option>Cinéma</option>
                    <option>Conférence</option>
                    <option>Danse</option>
                    <option>Expo</option>
                    <option>Festival</option>
                    <option>Fête</option>
                    <option>Foire</option>
                    <option>Musée</option>
                    <option>Musique</option>
                    <option>Salon</option>
                    <option>Sport</option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-offset-6 col-md-3">
                    <select id="categorie" class="form-control" required>
                        <option selected>Public...</option>
                        <option>Tout public</option>
                        <option>Enfant</option>
                        <option>Ado</option>
                        <option>Adulte</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Date" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Heure" required>
                </div>
            </div>
            <div class="row visuel text-center">
                <div class="col-md-offset-2 col-md-3 text-center">
                    <img src="images/image-grise.jpg" alt="image-grisée" width=260px ><!--270*140p-->
                    <button type="file" class="btn btn-light bt_bleu">Télecharger une image</button>
                    <!-- TODO check if necessary
                    <small id="passwordHelpBlock" class="form-text text-muted">Format png de taille xxxx</small>
                    -->
                        
                </div> 
                <!--TODO  taille image à télécharger + verif script??-->
                        <!--<input id="input-dim-4" name="input-dim-4[]" multiple type="file" accept="image/*">-->
                    <script> 
                    $("#input-dim-1").fileinput({
                        uploadUrl: "/file-upload-batch/2",
                        allowedFileExtensions: ["jpg", "png", "gif"],
                        minImageWidth: 50,
                        minImageHeight: 50
                    });
                    </script>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Lieu" required>
                    <input type="text" class="form-control" placeholder="Adresse" required>
                    <input type="text" class="form-control" placeholder="Code postal" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Légende" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Ville" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Contact" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <select id="Département" class="form-control" required>
                        <option selected>Département</option>
                        <option>Aude (11)</option>
                        <option>Gard (30)</option>
                        <option>Hérault (34)</option>
                        <option>Lozère (48)</option>
                        <option>Pyrénées-Orientales (66)</option>
                    </select>
                </div>        
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="tel" class="form-control" placeholder="Téléphone" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Site web" required>
                </div>
                <div class="col-md-offset-2 col-md-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="label-group row">
                    <span class="custom-control-description col-md-offset-1 col-md-2 marginTop"><strong>Accès handicapé</strong></span>
                    <label class="custom-control custom-radio col-md-1 marginTop">
                        <input name="checkbox" type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">OUI</span>
                    </label>
                </div>
            </div> 
            <div class="row ">
                <div class="col-md-offset-2 col-md-7">
                    <textarea class="form-control" rows="8" placeholder="Descriptif de l'événement"></textarea>
                </div>  
            </div> 

        </form>
    </section>

      <!-- Statut événement -->
      <section id="statut-evenement" class="container marginTop">
      <div class="label-group row">
        <span class="custom-control-description col-md-offset-2 col-md-2"><strong>Statut</strong></span>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Brouillon</span>  
          </label>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input" checked>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Publié</span>
        </label>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input" disabled>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Refusé</span>
        </label>
      </div>

          <!-- bouton création événement -->
    <section id="bouton-creer-compte" class="container">
      <div class="row text-center col-md-offset-2 col-md-7">
        <button type="submit" class="btn btn-ligh bt_bleu">Créer l'événement</button>
      </div>
    </section>
</section>




  <!-- Footer -->
  <?php include ("footer.php");?>
  <!-- Fin Footer -->

          <!-- SCRIPTS !!! ! !! ? ? ? ? ? ? ? ? ? ? ? ? ? -->
          <!-- SCRIPTS !!! ! !! ? ? ? ? ? ? ? ? ? ? ? ? ? -->
          <!-- SCRIPTS !!! ! !! ? ? ? ? ? ? ? ? ? ? ? ? ? -->
          <!-- SCRIPTS !!! ! !! ? ? ? ? ? ? ? ? ? ? ? ? ? -->
          <!-- SCRIPTS !!! ! !! ? ? ? ? ? ? ? ? ? ? ? ? ? -->

          <!-- JQuery -->
          <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
          <!-- Bootstrap tooltips -->
          <script type="text/javascript" src="js/popper.min.js"></script>
          <!-- Bootstrap core JavaScript -->
          <script type="text/javascript" src="js/bootstrap.min.js"></script>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>