<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/nouvel-evenement</title>
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
    <?php include ("menu-contributeur.php");?>
    <section id="introduction-nouvel-evenement" class="container-fluid">
        <div class="col-md-12 row text-center">
            <h1> Création évènement</h1>
            <div class="col-md-offset-3 col-md-6 row text-center">
                <p>Enregistrez votre nouvel événement à l'aide du formulaire ci-dessous.
                    <br />Besoin d'aide ? Cliquez sur le bouton pour obtenir des informations supplémentaires</p>
            </div>
    </section>

    <section id="formulaire-nouvel-evenement" class="container">
        <form>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Titre de l'événement">
                </div>
                <div class="col-md-offset-1 col-md-3">
                <select id="categorie" class="form-control">
                    <option selected>Catégorie...</option>
                    <option>atelier</option>
                    <option>cinema</option>
                    <option>conférence</option>
                    <option>danse</option>
                    <option>expo</option>
                    <option>festival</option>
                    <option>fête</option>
                    <option>foire</option>
                    <option>musée</option>
                    <option>musique</option>
                    <option>salon</option>
                    <option>sport</option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <select id="categorie" class="form-control">
                        <option selected>Public...</option>
                        <option>tout public</option>
                        <option>adulte</option>
                        <option>étudiant</option>
                        <option>ado</option>
                        <option>enfant</option>
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
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <img src="images/image-grise.png" alt="image-grisée"><!--270*140p-->
                    <button type="button" class="btn btn-light">Télecharger une image</button>
                    <!-- TO DO check if necessary 
                    <small id="passwordHelpBlock" class="form-text text-muted">Format png de taille xxxx</small>
                    -->
                        
                </div> 
                <!--TO DO  taille image à télécharger + verif script??-->
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
                    <select id="Département" class="form-control">
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
                    <input type="text" class="form-control" placeholder="Téléphone" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Site web" required>
                </div>
            </div> 
            <div class="row ">
                <div class="col-md-offset-2 col-md-8">
                    <textarea class="form-control" rows="8" placeholder="Descriptif de l'événement"></textarea>
                </div>  
            </div> 
            <div class="label-group row">
                <span class="custom-control-description col-md-offset-2 col-md-2"><strong>Accès handicapé</strong>
                </span>
                    <label class="custom-control custom-radio col-md-1">
                        <input name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">OUI</span>  
                    </label> 
            </div>     
        </form>
    </section>

      <!-- Statut événement -->
      <section id="statut-evenement" class="container">  
      <div class="label-group row">
        <span class="custom-control-description col-md-offset-2 col-md-2"><strong>Statut</strong></span>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Brouillon</span>  
          </label>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Publié</span>  
        </label>
        <label class="custom-control custom-radio col-md-2">
          <input name="radio" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">refusé</span>  
        </label>
      </div>

          <!-- bouton création événement -->
    <section id="bouton-creer-compte" class="container">
      <div class="row text-center">
        <button type="button" class="btn btn-light">Créer l'événement</button>
      </div>
    </section>
        <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>