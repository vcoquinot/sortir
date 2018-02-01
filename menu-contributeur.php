<?php
//verification session ouverte
require_once("securite.php");
?>
<header class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            <a class="navbar-brand" href="index.html"></a>
            <a href="index.php" title="Page d'accueil sortirgratos.fr"><img class="anim_logo" src="images/logo.png" alt= "logo"></a>
        </div>
        <div class="col-md-offset-1 col-md-6 row text-right">
            <span><?php echo((isset($_SESSION['pseudo'])) ? ($_SESSION['pseudo']):""); ?></span>
            <a class="display_inline_block" href="logout.php"><p>Déconnexion</p></a>
        </div>

    </div>
</header>