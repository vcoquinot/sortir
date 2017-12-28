<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortirgratos/mon compte</title>
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
    <section id="introduction-mon-compte" class="container-fluid">
        <div class="col-md-12 row text-center">
            <h1>Mon compte</h1>
            <!-- Modification profil -->
            <section id="modification" class="container">
                <div class="row">
                    <h3>Modifiez votre profil</h3>
                </div>
            </section>
    </section>

            <!-- Formulaire modification profil -->
    <section id="formulaire-creation-compte" class="container">
        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="password" placeholder="Mot de passe">
            </div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="text" placeholder="Nom de l'entité">
            </div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form> 
        
        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="text" placeholder="Site web">
            </div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="mail" placeholder="Mail">
            </div>
            <div class="col-md-2 text-right">
                    <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form> 
     
       <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <textarea class="form-control" rows="3" placeholder="Adresse"></textarea>
                <input class="form-control" type="number" placeholder="CP"> 
                <input class="form-control" type="text" placeholder="Ville">
            </div>  
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form>

        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="text" placeholder="Nom">
            </div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>    
        </form> 
       
        <form class="form-group row ">
            <div class="col-md-offset-3 col-md-3">
                <input class="form-control" type="number" placeholder="Téléphone">
            </div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-light bt_bleu">Modifier</button>
            </div>
        </form>
    </section>
          <!-- Fin formulaire modification profil -->

          <!-- Préférences newsletter -->
     <section id="modification" class="container">
        <div class="col-md-12 row text-center">
            <h3>Modifiez vos préférences</h3>
        </div>

        <?php include ("newsletter.php");?>

    </section>
         

