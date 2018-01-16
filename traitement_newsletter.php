<!--traitement du formulaire inscription à la newsletter-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Inscription à la newsletter</title>



</head>

<body>

<pre>
    <?php
print_r($_POST);
    ?>
</pre>

<?php //TODO mysql_real_escape_string
    if(isset($_POST['email'])) 
    { 
        $email = $_POST['email'];
        $prenom= $_POST['prenom'];
        $nom = $_POST['nom'];
        $CGU=$_POST['CGU'];
    }

    //vérification accepatation CGU
    if($CGU != 'accepte') 
    {
        echo "Vous devez accepter les conditions générales pour finaliser votre inscription <br/>";
        header("Location: inscription-newsletter.php");
    }
    else{
        echo "Vous êtes bien inscrit à la newsletter";
    }
    ?>

</body>
</html>