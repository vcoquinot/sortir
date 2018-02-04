<?php
function displayFormCreationCompte(){
?>
    <!-- ***************************************   -->
    <!-- Formulaire création compte -->
    <!-- ***************************************   -->

    <section id="formulaire-creation-compte" class="container">

        <form method="POST">
            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <input name="pseudo" class="form-control" type="text" placeholder="Pseudo*"
              value="<?php echo (isset($_POST['pseudo'])) ? ($_POST['pseudo']) : "" ;?>" required>
                </div>  <!-- si pseudo existe tu me le mets sinon tu mets rien-->
            <div class="col-md-offset-1 col-md-3">
                <input name="email" class="form-control" type="email" placeholder="Email*"
                value="<?php echo (isset($_POST['email'])) ? ($_POST['email']) : "" ;?>"required>
            </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <input name="nom" class="form-control" type="text" placeholder="Nom*"
                value="<?php echo (isset($_POST['nom'])) ? ($_POST['nom']) : "" ;?>"required>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <input name="prenom" class="form-control" type="text" placeholder="Prénom*"
                value="<?php echo (isset($_POST['prenom'])) ? ($_POST['prenom']) : "" ;?>"required>
            </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <input name="psw" class="form-control" type="password" placeholder="Mot de passe*"
                value="<?php echo (isset($_POST['psw'])) ? ($_POST['psw']) : "" ;?>"required>
                </div>
            <div class="col-md-offset-1 col-md-3">
                <input name="psw_confirm" class="form-control" type="password" placeholder="Confirmer votre mot de passe*"
                value="<?php echo (isset($_POST['psw_confirm'])) ? ($_POST['psw_confirm']) : "" ;?>"required>
            </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <input name="entite" class="form-control" type="text" placeholder="Nom de l'entité">
                </div>
            <div class="col-md-offset-1 col-md-3">
                <select class="form-control" name="type" required>
                  <option value="<?php echo (isset($_POST['type'])) ? ($_POST['type']) : "" ;?>">Type...*</option>
                  <option value="Association">Association</option>
                  <option value="Collectivité">Collectivité</option>
                  <option value="Entreprise">Entreprise</option>
                  <option value="Particulier">Particulier</option>
                </select>
            </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <textarea name="adresse" class="form-control" rows="3" placeholder="Adresse*"
                value="<?php echo (isset($_POST['adresse'])) ? ($_POST['adresse']) : "" ;?>" required></textarea>
                </div>
            <div class="col-md-offset-1 col-md-3">
                <input name="cp" class="form-control" type="text" placeholder="Code postal*"
                value="<?php echo (isset($_POST['cp'])) ? ($_POST['cp']) : "" ;?>"required>
                <input name="ville" class="form-control" type="text" placeholder="Ville*"
                value="<?php echo (isset($_POST['ville'])) ? ($_POST['ville']) : "" ;?>"required>
            </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-offset-2 col-md-3">
                <input name="site" class="form-control" type="text" placeholder="Site web">
                </div>
            <div class="col-md-offset-1 col-md-3">
                <input name="tel" class="form-control" type="tel" placeholder="Téléphone*"
                value="<?php echo (isset($_POST['tel'])) ? ($_POST['tel']) : "" ;?>" required>
            </div>
            </div>

            <!-- Inscription newsletter -->
            <?php include ("newsletter.php");?>

          <!-- Acceptation CGU -->
    <section id="CGU" class="container">
        <div class="label-group row">
            <label class="custom-control custom-checkbox col-md-offset-3 col-md-5 text-center">
                <a href="mentions-legales.php" target="_blank"><span class="custom-control-description">J'accepte les conditions générales*&nbsp;</span></a>
                <input name="CGU" type="radio" class="custom-control-input" value="accepte">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Oui&nbsp;</span>

                <input name="CGU" type="radio" class="custom-control-input" value="refuse" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Non</span>
            </label>
        </div>
    </section>


    <!-- bouton creation compte -->
    <section id="bouton-creer-compte" class="container">
        <div class="row text-center">
            <button type="submit" class="btn btn-ligh bt_bleu">Je crée mon compte</button>
        </div>
    </section>
        
        </form>
    </section>

    <!-- Fin formulaire -->

<?php
}

function displayFormConnexion(){
?>
    <!-- ***************************************   -->
    <!-- Formulaire connexion -->
    <!-- ***************************************   -->

    <section id="formulaire-contributeur" class="container">

        <form  action="connexion.php" method="POST" class="form-horizontal">
            <div class="form-group row">
                <div class="col-md-offset-3 col-md-3"><!--TODO   header("Location: .php")-->
                <input class="form-control" type="text" placeholder="Pseudo" name="pseudo" value="<?php echo (isset($_POST['pseudo'])) ? ($_POST['pseudo']) : "" ;?>" required>
                </div>
            <div class="col-md-3">
                <input class="form-control" type="password" placeholder="Mot de passe" name="password" value="<?php echo (isset($_POST['password'])) ? ($_POST['password']) : "" ;?>" required>
                <small><a href="non-developpe.php" >Mot de passe oublié</a></small>
            </div>
            <div class="col-md-12 row text-center">
                <button type="submit" class="btn btn-light bt_bleu" autofocus>Connexion</button>
            </div>
            </div>
        </form>

    </section>

    <section id="boutons-contributeur" class= "container"><!--!!!!!!!!! TO DO AJOUTER LIENS!!!!!!!-->
        <div class="col-md-12 row text-center">
            <h3> Envie de devenir contributeur ?</h3>
            <a href="creation-compte.php" class="lien_bleu font_roboto">Créer un compte</a>
        </div>
    </section>
    <!-- Fin formulaire -->
<?php
  }

function displayFormNouvelEvenement(){
?>
    <!-- ***************************************   -->
    <!-- Formulaire Nouvel Evenement -->
    <!-- ***************************************   -->
    <section id="formulaire-nouvel-evenement" class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <input type="text" class="form-control" placeholder="Titre de l'événement*" name="titre" title="Titre de l'événement" value="<?php echo (isset($_POST['titre'])) ? ($_POST['titre']) : "" ;?>" required>
                </div>

                <div class="col-md-offset-2 col-md-4">
                    <select name="categorie" class="form-control" title="Catégorie dans laquelle l'événement va apparaître" required>
                        <option value="" selected>Catégorie...*</option>
                        <option value="Atelier">Atelier</option>
                        <option value="Cinéma">Cinéma</option>
                        <option value="Conférence">Conférence</option>
                        <option value="Danse">Danse</option>
                        <option value="Expo">Expo</option>
                        <option value="Festival">Festival</option>
                        <option value="Fête">Fête</option>
                        <option value="Foire">Foire</option>
                        <option value="Musée">Musée</option>
                        <option value="Musique">Musique</option>
                        <option value="Salon">Salon</option>
                        <option value="Sport">Sport</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <select name="public" class="form-control" title="À qui s'adresse l'événement" required>
                        <option value="" selected>Public...*</option>
                        <option value="Tout public">Tout public</option>
                        <option value="Enfant">Enfant</option>
                        <option value="Ado">Ado</option>
                        <option value="Adulte">Adulte</option>
                    </select>
                </div>

                <div class="col-md-offset-2 col-md-4">
                    <input name="date" type="date" class="form-control" placeholder="Date*" title="Date de l'événement" required>
                </div>

                <div class="col-md-4">
                    <input name="heure" type="time" class="form-control" placeholder="Heure*" title="Heure de l'événement" required>
                </div>

                <div class="label-group row col-md-offset-2 col-md-8 marginTop text-center">
                <label class="custom-control-input">Accessible aux personnes à mobilitée réduite*&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="acces_handicap" value="oui" required>&nbsp;Oui</label>
                <label class="custom-control-input">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="acces_handicap" value="non">&nbsp;Non</label>
                </div>

            </div>

                <div class="col-md-12">
                    <p class="spacer"></p>
                </div>

                <div class="col-md-offset-2 col-md-8">
                    <input name="lieu" type="text" class="form-control" placeholder="Lieu-dit, nom de la salle…*" title="Comment s'appelle le lieu de l'événement" required>
                    <input name="adresse" type="text" class="form-control" placeholder="Adresse*" title="Adresse de l'événement" required>
                </div>

                <div class="col-md-offset-2 col-md-4">
                    <input name="code_postal" type="text" class="form-control" placeholder="Code postal*" title="Code postal" required>
                </div>

                <div class="col-md-4">
                    <input name="ville" type="text" class="form-control" placeholder="Ville*" title="Ville" required>
                </div>

                <div class="col-md-offset-2 col-md-4">
                    <select class="form-control" name="departement" title="Département où l'événement à lieu" required>
                        <option value="" selected>Département...*</option>
                        <option value="Aude">Aude (11)</option>
                        <option value="Gard">Gard (30)</option>
                        <option value="Hérault">Hérault (34)</option>
                        <option value="Lozère">Lozère (48)</option>
                        <option value="Pyrénées-Orientales">Pyrénées-Orientales (66)</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <p class="spacer"></p>
                </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-4">
                    <textarea name="descriptif" class="form-control" rows="12" placeholder="Descriptif de l'événement*" title="Détails de l'événement" required></textarea>
                </div>

                <!-- ***************************************   -->
                <!-- Gestion téléchargement visuel événement -->
                <!-- ***************************************   -->
                <div id="visuel" class="row visuel text-center">
                    <div class="col-md-4 text-center">
                        <img id="visuel_evenement" src="images/image-grise.png" alt="image-grisée" title="Visuel de l'image"><!--270*140p-->
                        <label for="fileToUpload" class="btn btn-light bt_bleu" title="Cliquez sur ce bouton pour télécharger le visuel de l'événement">Télécharger une image*</label>
                        <input id="fileToUpload" name="fileToUpload" class="input-file" type="file" required>
                        <input name="legende" type="text" class="form-control" placeholder="Légende" title="Légende du visuel (utile pour Google)">
                    </div>
                </div>
            </div>
            <!-- Fin gestion téléchargement visuel -->    

            <div class="col-md-12">
                <p class="spacer"></p>
            </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <input name="contact" type="text" class="form-control" placeholder="Contact" title="Nom de la personne à contacter pour obtenir plus d'infos">
            </div>

            <div class="col-md-4">
                <input name="tel" type="tel" class="form-control" placeholder="Téléphone" title="Téléphone du contact ou de l'organisateur">
            </div>

            <div class="col-md-offset-2 col-md-4">
                <input name="mail" type="email" class="form-control" placeholder="Email" title="Email du contact ou de l'organisateur">
            </div>

            <div class="col-md-4">
                 <input name="site" type="text" class="form-control" placeholder="Site web" title="Site web de l'organisateur">
            </div>
        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>

        <div class="row">
            <div class="label-group row col-md-offset-2 col-md-8 marginTop text-center">
                <label class="custom-control-input">Statut de la publication*&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="statut" value="brouillon" required>&nbsp;Brouillon</label>
                <label class="custom-control-input">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="statut" value="publié" checked>&nbsp;Publié</label>
            </div>
        </div>

        <div class="col-md-12">
            <p class="spacer"></p>
        </div>

        <!-- bouton création événement -->
        <section id="bouton-creer-compte" class="container">
            <div class="row text-center col-md-offset-2 col-md-7">
                <button type="submit" class="btn btn-ligh bt_bleu">Créer l'événement</button>
            </div>
        </section>
        
        </form>
    </section>
<?php
}
?>
