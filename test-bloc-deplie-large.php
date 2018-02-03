<?php
    $compteur = 0;

        if (!($valeurs= $donnees_bdd->fetch())) {
        echo "<p class='message textBlanc'>Aucun événement selon les critères en vigueur</p>";
    }
    else {
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

                <img class="img-responsive" src=<?php echo $valeurs['chemin_image']?> alt=<?php echo $valeurs['legende']?>>
                <img class="icon_acces_handicape" alt='accès handicapé' title="accès handicapé" src=<?php if ($valeurs['acces_handicap']=="oui") {echo "images/acces_handicape_O.png";} else {echo "images/acces_handicape_N.png";}?> >
                <a class="btn btn-light buttonPlus" href="<?php echo "#" . $valeurs['id'] ?>">+</a>

            </div>
        </article>
        <?php
    }

?>


