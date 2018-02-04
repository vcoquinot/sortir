<article id="<?php echo "#" . $valeurs['id'] ?>" class="evenement-complet">
    <div class="evenement-description col-md-offset-1 col-md-10" >
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


        <a class="btn btn-light buttonPlus" href="<?php echo "#" . $valeurs['id'] ?>">X</a>

    </div>
</article>