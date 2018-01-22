<?php
session_start ();
?>
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

    include ("acces-bdd.php");

    $pseudo= $_POST['pseudo'];
    $password= $_POST['password'];

    //$donneebdd_pseudo = $bdd->query('SELECT `pseudo` from `utilisateur` WHERE `pseudo` = $pseudo');
    $donneebdd_pseudo = $bdd->query('SELECT pseudo from utilisateur');
    $donneebdd_pwd = $bdd->query('SELECT `pwd` from `utilisateur`');

    //VERIF SI PSEUDO EXISTE DANS BDD
    $donnee_pseudo = $donneebdd_pseudo->fetch();
    
        if ($pseudo == $donnee_pseudo['pseudo']) 
        {
            //VERIF SI PWD CORRECT
            $donnee_pwd = $donneebdd_pwd->fetch(); 
            
                if($password == $donnee_pwd['pwd'])
                {
                    header('Location:tableau-de-bord.php');
                }
                else
                {
                    echo "Mot de passe incorrect";
                }
        }
        else
        {
            echo "Ce pseudo n'existe pas";
        }
    

        $donneebdd_pseudo->closeCursor();
        $donneebdd_pwd->closeCursor();
        

    ?>
    

</body>
</html>