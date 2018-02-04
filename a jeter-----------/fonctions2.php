
<?php
function displayFormModifierEvenement(){
?>
    <!-- ***************************************   -->
    <!-- Formulaire Modifier Evenement -->
    <!-- ***************************************   -->
    <section id="formulaire-nouvel-evenement" class="container">

        <form method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <input type="text" class="form-control" placeholder="Titre de l'événement*" name="titre" title="Titre de l'événement" value="<?php echo (isset($valeurs['titre'])) ? ($valeurs['titre']) : "" ;?>" required>
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
                <button type="submit" class="btn btn-ligh bt_bleu">Enregistrer le(s) changement(s)</button>
            </div>
        </section>
        </form>

    </section>

<?php
}
?>
