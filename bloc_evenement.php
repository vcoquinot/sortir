<?php
include ("acces-bdd.php");

$donnees_bdd = $bdd->query("SELECT * FROM evenement");

//echo "donnes : " . $donnees_bdd . "<br/>";/**/


echo "----////----";
echo "<pre>";
print_r($donnees_bdd);
echo "<pre>";
echo "----////----<br/>";


while ($valeurs = $donnees_bdd->fetch()) {
    echo "----////----<br/>";
}

?>
<!-- <artic
le class="evenement-block">
                <div class="evenement-description col-xs-12 col-md-5" >
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <h2><?php /*echo $valeurs["titre"]*/?></h2>
</div>
<div class="col-xs-5 col-md-4">
    <h3><?php /*echo $valeurs["categorie"] */?></h3>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4><?php /*echo $valeurs["date"] */?><span> / </span><span class = "bleu"><?php /*echo $valeurs["heure"] */?></span><span> / </span><?php /*echo $valeurs["public"] */?></h4>
        <h4><?php /*echo $valeurs["lieu"] */?><span> / </span><span class = "bleu"><?php /*echo $valeurs["departement"] */?></span></h4>
    </div>
</div>

<img src=./images/concert.jpg alt="concert">
<button type="button" class="btn btn-light buttonPlus">+</button>
</div>
</article>-->

<?php
/*}*/
?>