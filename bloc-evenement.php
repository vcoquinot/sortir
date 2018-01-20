<?php
$compteur = 0;

while ($valeurs = $donnees_bdd->fetch()) {
    $compteur++;
    if ($compteur%7 == 0) {
        ?>
        <article class="evenement-block">
            <div class="evenement-description col-xs-12 col-md-12">
                <img class="img-responsive annonceur" src=<?php echo "images/visuels-sponsorises/evenements_annonceur_0" . (rand (1, 2)) . ".jpg" ?> alt='Annonceur'>
            </div>
        </article>

        <?php
    }
    ?>

    <article class="evenement-block">
        <div class="evenement-description col-xs-12 col-md-6" >
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2><?php echo $valeurs['titre'] ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h3><?php echo $valeurs['categorie'] ?></h3>
                    <h4><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><?php echo $valeurs['date'] ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['heure'] ?></span><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['public'] ?></h4>

                </div>

                <h4 class="col-md-12"><?php echo $valeurs['lieu'] ?><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['departement'] ?></span></h4>
            </div>

            <img class="img-responsive" src=<?php echo $valeurs['chemin_img']?> alt=<?php echo $valeurs['legende']?>>
            <button type="button" class="btn btn-light buttonPlus">+</button>
        </div>
    </article>
    <?php
}
?>


