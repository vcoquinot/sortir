<?php
try{
  $bdd =new PDO('mysql:host=localhost;dbname=sortirgratos;charset=utf8', 'sortir' , 'sortir');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?>