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
    <section id="introduction-nouvel-evenement" class="container'fluid">
        <img src="images/logo.png" alt= "logo">
        <div class="col-md-12 row text-center">
            <h1> Création évènement</h1>
            <div class="col-md-offset-4 col-md-4 row text-center">
                <p>Enregistrez votre nouvel événement. <br />Remplissez le formulaire ci-dessous. Besoin d'aide ? Cliquez sur le bouton pour obtenir des informations supplémentaires</p>
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
                    <option selected>catégorie...</option>
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
                    <input type="text" class="form-control" placeholder="Date" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Heure" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                        <input type="text" class="form-control" placeholder="Télécharger une image">
                        <input id="input-dim-1" name="input-dim-1[]" multiple type="file" accept="image/*">
                    </div>
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
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <input type="text" class="form-control" placeholder="Téléphone" required>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <input type="text" class="form-control" placeholder="Site web" required>
                </div>
            </div>       
        </form>

  
            </form>
            </form>
            </form>
            </form>
            </form>
            </form>
        </section>
        <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>