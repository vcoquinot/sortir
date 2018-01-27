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
<?php include ("contact.php");?>


<?php
$destinataire = 'w_doumal@yahoo.fr';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['mail'];

$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME Extensions multifonctions du courrier Internet1 c'est un standard internet
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'To: '.$destinataire."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n"; // Expediteur

$message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['nom'].'!<br>
                    '.$_POST['message'].'</div>';

if(mail($destinataire, $message, $headers))
{
    echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
}
else // Non envoyé
{
    echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
}
header('Location: contact.php');
?>




</body>
</html>
