<?php
try{
  $bdd =new PDO('mysql:host=localhost;dbname=sortirgratos;charset=utf8', 'root' , 'root');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

setlocale(LC_TIME, "fr_FR");
?>