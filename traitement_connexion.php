<!--traitement du formulaire connexion-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Connexion</title>



</head>

<body>

<pre>
    <?php
print_r($_POST);
    ?>
</pre>

    <?php
    // Connexion à la base de données
    // Valeurs à modifier selon vos paramètres configuration
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=sortirgratos;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>

</body>
</html>