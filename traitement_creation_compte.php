<!--traitement du formulaire création commpte-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Création compte</title>



</head>

<body>

<pre>
    <?php
print_r($_POST);
?>
</pre>

    <?php //TODO mysql_real_escape_string
    if(isset($_POST['pseudo'])) 
    { 
        $pseudo = $_POST['pseudo'];
        $email= $_POST['email'];
        $nom = $_POST['nom'];
        $prenom= $_POST['prenom'];
        $psw= $_POST['psw'];
        $psw_confirm = $_POST['psw_confirm'];
        $type= $_POST['type'];
        $adresse= $_POST['adresse'];
        $cp= $_POST['cp'];
        $ville= $_POST['ville'];
        $tel= $_POST['tel'];
    }

    //vérification password et password_confirm identiques
    if($psw_confirm != $psw ) 
    {
        echo "les deux mots de passe doivent être identiques <br/>";
        header("Location: creation-compte.php");
    }
    else{
        echo "Votre compte a bien été créé";
        //header("Location: tableau-de-bord.php");
    }

    ?>



</body>
</html>