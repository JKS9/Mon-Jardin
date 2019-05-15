<?php
require "controller/Panier.php";
if (isset($_SESSION['user'])) {

    if ($objPanier->nbPanier($_SESSION['user']) == false) {
        ?>
        <section>
            <div id="Panier">
                <div class="Panier_Title">
                    <p>Vous n'avez pas ajouter de produits à votre panier</p>
                </div>
                <div class="Panier_Univers">
                    <p>Nos catégories :</p>
                    <ul>
                        <li><a href="PlantesVertes">Plantes Vertes</a></li>
                        <li><a href="PlantesFleuris">Plantes Fleuries</a></li>
                        <li><a href="PlantesExotiques">Plantes Exotiques</a></li>
                    </ul>
                </div>
            </div>
            <div id="Home_Populaire">
                <div class="Home_Populaire_Titre">
                    <p>Les plantes les plus populaire</p>
                    <div class="Home_Populaire_barre"></div>
                </div>
                <div id="Home_Populaire_Produit">
                    <?php
                    foreach ($objProduitFLeuries->produitPopulaireAll() as $res) {
                        ?>
                        <div class="Home_Produits_Populaire">
                            <a href="PlantesFleuris-<?php echo $res['id'] ?>">
                                <div class="Home_Images_Produits_Populaire"
                                     style="background-image: url('./images/images_produits/<?php echo $res['name'] ?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                                <div class="Home_Info_Produits_Populaire">
                                    <h2><?php echo $res['name'] ?></h2>
                                    <h3><?php echo $res['prix'] ?> €</h3>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php
    } else {
        ?>
        <section>
            <div id="Mon_panier">
                <div class="Panier_Tableau">
                    <div class="Panier_P">
                        <p>Mon Panier :</p>
                    </div>
                    <div class="Scroll_Panier">
                        <table class="Panier_Tableau_Panier">
                            <tr class="Panier_Menu">
                                <td>&nbsp;</td>
                                <td>Référence</td>
                                <td>Nom</td>
                                <td>Nombres</td>
                                <td>prix</td>
                                <td>total</td>
                                <td>Suprimer</td>
                            </tr>
                            <?php
                            $total = 0;
                            foreach ($objPanier->nbPanier($_SESSION['user']) as $resNb) {
                                $id_Produit = $resNb['id_produit'];
                                foreach ($objPanier->AfficheUnProduit($id_Produit) as $resReq) {
                                    $calcule1 = $resReq['prix'];
                                    $calcule2 = $resNb['nb_produit'];
                                    $resCalcul = $calcule1 * $calcule2;
                                    $total += $resCalcul;
                                    $tva = ($total * 20) / 100;
                                    ?>
                                    <tr class="Panier_Produit">
                                        <td>
                                            <div class="Produit_Panier_Picture"
                                                 style="background-image: url('./images/images_produits/<?php echo $resReq['name'] ?>.jpg'); width: 80px; height: 80px; background-size: cover;">
                                            </div>
                                        </td>
                                        <td>
                                            <p><?php echo $resReq['id'] ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $resReq['name'] ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $resNb['nb_produit'] ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $resReq['prix'] ?> €</p>
                                        </td>
                                        <td>
                                            <p><?php echo $resCalcul ?> €</p>
                                        </td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="idProduit"
                                                       value="<?php echo $resNb['id'] ?>"/>
                                                <input name="DeleteProduit" type="image"
                                                       src="./images/icones/delete-button.svg"
                                                       style="width: 30px; height: 35px;">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <div class="Panier_Total">
                        <div class="Barre_Panier"></div>
                        <table style="text-align: end; width: 200px; font-weight: bolder;">
                            <tr>
                                <td><p>Prix total HT</p></td>
                                <td><p><?php echo $total; ?> €</p></td>
                            </tr>
                            <tr>
                                <td><p>TVA</p></td>
                                <td><p><?php echo $tva; ?> €</p></td>
                            </tr>
                            <tr>
                                <td><p>Prix total TTC</p></td>
                                <td><p><?php echo $total + $tva ?> €</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="Panier_Form">
                    <h1>Mon adresse de livraison</h1>
                    <?php echo $erreur; ?>
                    <form method="post">
                        <div class="Panier_Form_Number">
                            <label>Numéro de rue :</label>
                            <input type="text" name="number"/>
                        </div>
                        <div class="Panier_Form_Rue">
                            <label>rue :</label>
                            <input type="text" name="rue"/>
                        </div>
                        <div class="Panier_Form_Ville">
                            <label>Ville :</label>
                            <input type="text" name="Ville"/>
                        </div>
                        <div class="Panier_Form_Postal">
                            <label>Code postal :</label>
                            <input type="text" name="Postal"/>
                        </div>
                        <div class="Panier_Form_Button">
                            <input type="submit" name="commande" value="Commander"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php
    }

} else {
    ?>
    <section>
        <div id="Panier">
            <div class="Panier_Title">
                <p>Pour accéder à votre panier veuillez vous <a href="Connexion">Connectez</a></p>
            </div>
            <div class="Panier_Univers">
                <p>Nos catégories :</p>
                <ul>
                    <li><a href="PlantesVertes">Plantes Vertes</a></li>
                    <li><a href="PlantesFleuris">Plantes Fleuries</a></li>
                    <li><a href="PlantesExotiques">Plantes Exotiques</a></li>
                </ul>
            </div>
        </div>
        <div id="Home_Populaire">
            <div class="Home_Populaire_Titre">
                <p>Les plantes les plus populaire</p>
                <div class="Home_Populaire_barre"></div>
            </div>
            <div id="Home_Populaire_Produit">
                <?php
                foreach ($objProduitFLeuries->produitPopulaireAll() as $res) {
                    ?>
                    <div class="Home_Produits_Populaire">
                        <a href="PlantesFleuris-<?php echo $res['id'] ?>">
                            <div class="Home_Images_Produits_Populaire"
                                 style="background-image: url('./images/images_produits/<?php echo $res['name'] ?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                            <div class="Home_Info_Produits_Populaire">
                                <h2><?php echo $res['name'] ?></h2>
                                <h3><?php echo $res['prix'] ?> €</h3>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>
