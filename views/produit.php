<?php
$erreur = "";
require "controller/addproduit.php";
?>
<section>
    <div class="Produit_Selectectionner">
        <?php
        $id_Produit = $url[1];
        foreach ($objProduitFLeuries->AfficheUnProduit($id_Produit) as $res) {
            ?>
            <div class="Produit_Selectectionner_Affiche">
                <div class="Produit_Selectectionner_Affiche_Images"
                     style="background-image: url('./images/images_produits/<?php echo $res['name'] ?>.jpg');">
                </div>
                <div class="Produit_Selectectionner_Affiche_Info">
                    <div class="Produit_Selectectionner_Affiche_Name">
                        <h2><?php echo $res['name'] ?></h2>
                    </div>
                    <div class="Produit_Selectectionner_Affiche_Info_prix_add">
                        <div class="Produit_Selectectionner_Affiche_prix">
                            <div class="Produit_Selectectionner_Affiche_Icone_Livraison">
                                <div class="Icone_Livraison"
                                     style="background-image: url('./images/icones/truck.svg'); width: 40px; height: 40px; background-size: cover;"></div>
                                <p> Retrait point livraison en 2h</p>
                            </div>
                            <div class="Produit_Selectectionner_Affiche_Icone_Livraison">
                                <div class="Icone_Retrait"
                                     style="background-image: url('./images/icones/truck_time.svg'); width: 40px; height: 40px; background-size: cover;"></div>
                                <p> Livraison en 2h/72h</p>
                            </div>
                        </div>
                        <div class="Produit_Selectectionner_Affiche_Stock_Add">
                            <?php
                            if ($res['actif'] == 1) {
                                ?>
                                <div class='Produit_Selectectionner_Stocke_True'><p>En stocke</p></div>
                                <div id="PopUp" class="Produit_Selectectionner_Panier">
                                    <form method="post">
                                        <input type="hidden" name="idProduit" value="<?php echo $res['id']; ?>"/>
                                        <div class="Button_Add_Panier">
                                            <?php echo $erreur; ?>
                                            <h4><?php echo $res['prix'] ?> €</h4>
                                            <select name="NbProduit">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <input type="submit" name="AddPanier" value="Ajouter au panier"/>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            } else {
                                echo "<div class='Produit_Selectectionner_Stoke_False'><p>Indisponible</p></div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="Produit_Selectectionner_Description">
                    <h3>Description</h3>
                    <div class="Produit_Selectectionner_Affiche_Description">
                        <p><?php echo $res['description'] ?></p>
                    </div>
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
            <?php
        }
        ?>
    </div>
</section>
<section>
    <div id="Home_Livraison">
        <div class="Home_Livraison_Block">
            <h4>Livraison offerte</h4>
            <p>Pour toute commande MonJardin.com,
                dès 40€ d'achat</p>
        </div>
        <div class="Home_Livraison_Block">
            <h4>Livraison en 6h</h4>
            <p>Commandez en ligne votre commande livrer dans la journée</p>
        </div>
        <div class="Home_Livraison_Block">
            <h4>+ de 100 produits</h4>
            <p>Plantes vertes, PLantes fleurie, Plantes exotiques</p>
        </div>
        <div class="Home_Livraison_Block">
            <h4>Service livraison</h4>
            <p>24h/24h : 7j/7j notre service livraison à votre disposition</p>
        </div>
    </div>
</section>