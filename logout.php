<?php
    session_start();

//Destruction des variables de session
    session_unset ();
//Destruction de la session
    session_destroy ();
// Redicrection vers la page d'accueil
    header ('location: index.php');
    
?>