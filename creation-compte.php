<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/creation-compte</title>
    <link href="main.css"  type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="introduction-creation-compte" class="container'fluid">
      <a href="index.php"><img src="images/logo.png" alt= "logo"></a>
      <div class="col-md-12 row text-center">
      <h1> Connexion contributeur</h1>
      <div class="col-md-offset-4 col-md-4 row text-center">
      <p>Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis</p>
      </div>
    </section>

    <section id="formulaire-creation-compte" class="container">
      <form class="form-horizontal">
        <div class="form-group row "><!--voir si formGroupInputMedium necessaire ?? -->
          <label class="control-label col-md-2" for="formGroupInputMedium">Pseudo</label>
            <div class="col-md-3">
            <input class="form-control" type="password" id="formGroupInputPseudo">
            </div>
          <label class="control-label col-md-2 " for="formGroupInputMedium">Mot de passe</label>
            <div class="col-md-3">
            <input class="form-control" type="text" id="formGroupInputPassword">
            </div>
        </div>
      <form class="form-horizontal">
        <div class="form-group row ">
          <label class="control-label col-md-2" for="formGroupInputMedium">Type</label>
            <div class="col-md-3">
                <select id="class_type " class="form-control" autocomplete="off">
                  <option>Association</option>
                  <option>Collectivité</option>
                  <option>Entreprise</option>
                  <option>Particulier</option>
                </select>
            </div>
          <label class="control-label col-md-2" for="formGroupInputSmall">Nom entité</label>
            <div class="col-md-3">
            <input class="form-control" type="text" id="formGroupInputNomEntite">
            </div>
        </div> 
      <form class="form-horizontal">
        <div class="form-group row ">
          <label class="control-label col-md-2" for="formGroupInputMedium">Site web</label>
            <div class="col-md-3">
            <input class="form-control" type="text" id="formGroupInputSite">
            </div>
          <label class="control-label col-md-2" for="formGroupInputMedium">Mail</label>
            <div class="col-md-3">
            <input class="form-control" type="mail" id="formGroupInputMail">
            </div>
        </div> 
      <form class="form-horizontal">
        <div class="form-group row ">
          <label class="control-label col-md-2" for="formGroupInputMedium">Adresse</label>
            <div class="col-md-3">
            <textarea rows="3" id="formGroupInputAdresse"></textarea><!--agrandir largeur textarea ?? -->
            </div>
          <label class="control-label col-md-2" for="formGroupInputMedium">CP</label>
            <div class="col-md-3">
            <input class="form-control" type="mail" id="formGroupInputCP">
            </div>
        </div>
      </form>
      </form>
      </form>
      </form>
  </section>


  </body>
</html>