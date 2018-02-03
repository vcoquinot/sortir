<?php
    $compteur = 0;

        if (!($valeurs= $donnees_bdd->fetch())) {
        echo "<p class='message textBlanc'>Aucun événement selon les critères en vigueur</p>";
    }
    else {
        ?>
<!-- bloc événement PARTIEL -->
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
                        <h4><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><?php echo strftime('%e %b %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><span class = "bleu"><?php echo strftime('%H:%M', strtotime(strval($valeurs['heure']))) ?></span><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['public'] ?></h4>

                    </div>

                    <h4 class="col-md-12"><?php echo $valeurs['lieu'] ?><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['departement'] ?></span></h4>
                </div>

                <img class="img-responsive" src=<?php echo $valeurs['chemin_image']?> alt="<?php echo $valeurs['legende']?>">
                <img class="icon_acces_handicape" alt='accès handicapé' title="accès handicapé" src=<?php if ($valeurs['acces_handicap']=="oui") {echo "images/acces_handicape_O.png";} else {echo "images/acces_handicape_N.png";}?> >
                <a class="btn btn-light buttonPlus" href="<?php echo "#" . $valeurs['id'] ?>">+</a>

            </div>
        </article>
<!-- FIN bloc événement PARTIEL -->


<!-- bloc événement complet MASQUÉ -->
        <article id="<?php echo $valeurs['id'] ?>" class="modal anim_bloc_complet">
            <div class="evenement-description col-md-offset-1 col-md-10 complet_position" >
                <div class="row">
                    <div class=" col-md-8">
                        <h2><?php echo $valeurs['titre'] ?></h2>
                    </div>
                    <div class="col-md-4">
                        <h3><?php echo $valeurs['categorie'] ?></h3>
                        <img class="icon_acces_handicape" alt='accès handicapé' title="accès handicapé" src=<?php if ($valeurs['acces_handicap']=="oui") {echo "images/acces_handicape_O.png";} else {echo "images/acces_handicape_N.png";}?>>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <h4><?php echo strftime('%e %b %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><span class = "bleu"><?php echo strftime('%H:%M', strtotime(strval($valeurs['heure']))) ?></span><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><?php echo $valeurs['public'] ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['departement'] ?></span></h4><br/>
                        <p>
                            <?php echo $valeurs['descriptif'] ?>
                        </p>
                        <h4><?php echo $valeurs['contact'] ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['tel'] ?></span><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['mail'] ?></h4><br/>
                        <h4><?php echo $valeurs['lieu'] ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['adresse'] . " - " . $valeurs['code_postal'] . " " . $valeurs['ville'] ?></span></h4><br/>
                        <?php if (!($valeurs['site'] == "#")) {?><a href="<?php echo $valeurs['site'] ?>" target="_blank">Site</a><?php }  ?>

                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive" src=<?php echo $valeurs['chemin_image']?> alt=<?php echo $valeurs['legende']?>>
                    </div>
                </div>


                <a class="btn btn-light buttonPlus" href="#">X</a>

            </div>
        </article>
<!-- FIN bloc événement complet MASQUÉ -->


        <?php
    }


    while ($valeurs = $donnees_bdd->fetch()) {
        $compteur++;
        if ($compteur%6 == 0) {
            ?>
<!-- bloc événement PARTIEL -->
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
                        <h4><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><?php echo strftime('%e %b %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><span class = "bleu"><?php echo strftime('%H:%M', strtotime(strval($valeurs['heure']))) ?></span><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['public'] ?></h4>

                    </div>

                    <h4 class="col-md-12"><?php echo $valeurs['lieu'] ?><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['departement'] ?></span></h4>
                </div>

                <img class="img-responsive" src=<?php echo $valeurs['chemin_image']?> alt="<?php echo $valeurs['legende']?>">
                <img class="icon_acces_handicape" alt='accès handicapé' title="accès handicapé" src=<?php if ($valeurs['acces_handicap']=="oui") {echo "images/acces_handicape_O.png";} else {echo "images/acces_handicape_N.png";}?>>
                <a class="btn btn-light buttonPlus" href="<?php echo "#" . $valeurs['id'] ?>">+</a>
            </div>
        </article>
<!-- FIN bloc événement PARTIEL -->

<!-- bloc événement complet MASQUÉ -->
        <article id="<?php echo $valeurs['id'] ?>" class="modal anim_bloc_complet">
            <div class="evenement-description col-md-offset-1 col-md-10 complet_position" >
                <div class="row">
                    <div class=" col-md-8">
                        <h2><?php echo $valeurs['titre'] ?></h2>
                    </div>
                    <div class="col-md-4">
                        <h3><?php echo $valeurs['categorie'] ?></h3>
                        <img class="icon_acces_handicape" alt='accès handicapé' title="accès handicapé" src=<?php if ($valeurs['acces_handicap']=="oui") {echo "images/acces_handicape_O.png";} else {echo "images/acces_handicape_N.png";}?>>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <h4><?php echo strftime('%e %b %g', strtotime(strval($valeurs['date']))) ?><span>&nbsp;&nbsp;///&nbsp;&nbsp;</span><span class = "bleu"><?php echo strftime('%H:%M', strtotime(strval($valeurs['heure']))) ?></span><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><?php echo $valeurs['public'] ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['departement'] ?></span></h4><br/>
                        <p>
                            <?php echo $valeurs['descriptif'] ?>
                        </p>
                        <h4><?php echo $valeurs['contact'] ?><span>&nbsp;&nbsp;//&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['tel'] ?></span><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><?php echo $valeurs['mail'] ?></h4><br/>
                        <h4><?php echo $valeurs['lieu'] ?><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class = "bleu"><?php echo $valeurs['adresse'] . " - " . $valeurs['code_postal'] . " " . $valeurs['ville'] ?></span></h4><br/>
                        <?php if (!($valeurs['site'] == "#")) {?><a href="<?php echo $valeurs['site'] ?>" target="_blank">Site</a><?php }  ?>

                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive" src=<?php echo $valeurs['chemin_image']?> alt=<?php echo $valeurs['legende']?>>
                    </div>
                </div>


                <a class="btn btn-light buttonPlus" href="#">X</a>

            </div>
        </article>
<!-- FIN bloc événement complet MASQUÉ -->

        <?php
    }
?>


