<header class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            <a class="navbar-brand" href="index.html"></a>
            <a href="index.php" title="Page d'accueil sortirgratos.fr"><img class="anim_logo" src="images/logo.png" alt= "logo"></a>
        </div>

        <div class=" col-md-7 row text-right">
            <?php
            if ((isset($_SESSION['pseudo'])))
            {
            ?>
                <div class="bt_dTdB_deconnexion">
                <a class="display_inline_block" href="tableau-de-bord.php">Tableau-de-bord</a>
                <a class="display_inline_block" href="logout.php">Déconnexion <?php echo "[". ($_SESSION['pseudo']). "]";?></a>
                <a class="display_inline_block" href="non-developpe.php"><i class="fa fa-facebook-square fa-lg"></i></a>
                </div>

            <?php
            }
            else {
                ?>
                <div>
                <a class="display_inline_block" href="connexion.php"><p>Contribution</p></a>
                <a class="display_inline_block" href="non-developpe.php"><i class="fa fa-facebook-square fa-lg"></i></a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</header>