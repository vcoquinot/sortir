<!-- rajouter addslashes(htmlspecialchars(strip_tags($_POST['mail'])))-->


<?php

$mail = 'mannoury@free.fr';
$passage_ligne = "\n";


$message = $_POST['message'];
$expediteur = $_POST['mail'];
$nom = $_POST['nom'];
$message .= "De $nom ($expediteur) - $message";
$sujet = "Mail depuis le site sortirgratos.fr";


////=====Déclaration des messages au format texte et au format HTML.
//
//$message_txt = $_POST['message'] . "--------Salut à tous, voici un e-mail envoyé par un script PHP.";
//$message_html = "<html><head></head><body><b>Salut à tous</b>," . $_POST['message'] . "<i>script PHP</i>.</body></html>";
////==========
//
////=====Création de la boundary
//$boundary = "-----=".md5(rand());
////==========
//
////=====Définition du sujet.
//$sujet = "Mail depuis le site sortirgratos.fr";
////=========
//
////=====Création du header de l'e-mail.
//$header = "From: \"sortirgratos.fr\"<mannoury@free.fr>".$passage_ligne;
//$header.= "Reply-to: \"sortirgratos.fr\" <mannoury@free.fr>".$passage_ligne;
//$header.= "MIME-Version: 1.0".$passage_ligne;
//$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
////==========
//
////=====Création du message.
//$message = $passage_ligne."--".$boundary.$passage_ligne;
////=====Ajout du message au format texte.
//$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
//$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
//$message.= $passage_ligne.$message_txt.$passage_ligne;
////==========
//$message.= $passage_ligne."--".$boundary.$passage_ligne;
////=====Ajout du message au format HTML
//$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
//$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
//$message.= $passage_ligne.$message_html.$passage_ligne;
////==========
//$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
////==========

//=====Envoi de l'e-mail.
//if (mail($mail,$sujet,$message,$header)) {
//    echo "Votre message a bien été envoyé";
//}
//    else {
//        echo "Votre message n'a pas pu être envoyé";
//    }
//
//    echo "<hr/> $message";
//echo "<hr/> $boundary";
//==========

if (mail($mail,$sujet,$message)) {
    echo "Votre message a bien été envoyé";
}
else {
    echo "Votre message n'a pas pu être envoyé";
}





//header('Location: contact.php');





//$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME Extensions multifonctions du courrier Internet1 c'est un standard internet
//$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
//$headers .= 'To: '.$destinataire."\n"; // Mail de reponse
//
//$message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['nom'].'!<br>
//                    '.$_POST['message'].'</div>';
//
//if(mail($destinataire, $message, $headers))
//{
//    echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
//}
//else // Non envoyé
//{
//    echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
//}
//header('Location: contact.php');
?>





<!--traitement du formulaire contact-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sortirgratos.fr / Contact</title>



</head>

<body>



</body>
</html>