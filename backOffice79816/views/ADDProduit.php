<?php
require "controller/ADDProduits.php";
?>
<section>
    <div id="addProduits">
        <div class="Title">
            <h2>Ajouter un produit aux articles : </h2>
            <div class="barre"></div>
            <?php echo $erreur ?>
        </div>
        <div class="ADD_Form_Produits">
            <form method="post" enctype="multipart/form-data">
                <div class="ADD_Produit_name">
                    <label>Name :</label>
                    <input type="text" name="name"/>
                    <h4>Le nom du produit doit étre unique.</h4>
                </div>
                <div class="ADD_Produit_Biography">
                    <label>Déscription :</label>
                    <input type="text" name="Biography"/>
                </div>
                <div class="ADD_Produit_Price">
                    <label>Prix :</label>
                    <input type="number" name="Price"/>
                    <h4>Pas besoin d'écrire "30€", "30" suffit.</h4>
                </div>
                <div class="ADD_Produit_Actif">
                    <label>Activer</label>
                    <input type="radio" name="Actif" value="1" checked="checked"/>
                    <label>Désactiver</label>
                    <input type="radio" name="Actif" value="0"/>
                    <h4>Si vous séléctionnez activer votre produit sera disponible, sinon désactiver = indisponible</h4>
                </div>
                <div class="ADD_Produit_Categories">
                    <label>Catégories produits :</label>
                    <select name="ChoseCategorie">
                        <option value="1">Plantes Vertes</option>
                        <option value="2">Plantes Fleuries</option>
                        <option value="3">Plantes Exotiques</option>
                    </select>
                </div>
                <div class="ADD_Produit_Picture">
                    <label>Ajouter une image :</label>
                    <input type="file" name="pictures"/>
                    <h4>Votre image doit faire impérativement 800px X 800px et ne pas avoir de bordure blanc ou noir.</h4>
                </div>
                <div class="ADD_Produit_Button">
                    <input type="submit" name="ADDProduits" value="Ajouter"/>
                </div>
            </form>
        </div>
    </div>
</section>
