<header class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            <a class="navbar-brand" href="index.html"></a>
            <a href="index.php" title="Page d'accueil sortirgratos.fr"><img class="anim_logo" src="images/logo.png" alt= "logo"></a>
        </div>
        <div class="col-md-offset-1 col-md-6 row text-right">
        <?php
        if ((isset($_SESSION['pseudo'])))
        {
        ?>
            <a class="display_inline_block" href="tableau-de-bord.php"><span>Tableau-de-bord</span></a>
            <span><?php echo "[". ($_SESSION['pseudo']). "]";?> </span>
                <a class="display_inline_block" href="logout.php"><span>Déconnexion</span></a>
       
        <?php
        }
        else {
            ?>
            <a class="display_inline_block" href="connexion.php"><p>Contribution</p></a>
            <a class="display_inline_block" href="non-developpe.php"><i class="fa fa-facebook-square fa-lg"></i></a>
<?php
        }
        ?>
        
           
        </div>
    </div>
</header>