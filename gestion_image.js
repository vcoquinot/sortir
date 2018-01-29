/* récupère l'objet image*/
var photoEvenement = document.getElementById("visuel_evenement");

/* récupère l'objet bouton téléchargemnt*/
var boutonTelechargerImage = document.getElementById("fileToUpload");

/* positionne une écoute sur le bouton et réagi au changement (sélection d'un fichier) */
boutonTelechargerImage.addEventListener("change", function() {

/* charge dans la variable curFiles un objet qui contient les informations*/
var curFiles = boutonTelechargerImage.files;

/* change le visuel par défaut avec le fichier sélectionné */
photoEvenement.src = window.URL.createObjectURL(curFiles[0]);
});
