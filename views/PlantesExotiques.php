<?php
require "controller/produit.php";
?>
<section>
    <div id="PlantesExotiques">
        <div class="PlantesExotiques_Titre">
            <h2>Plantes Exotiques</h2>
        </div>
        <div class="PlantesExotiques_Barre"></div>
        <div id="PlantesExotiques_Populaire">
            <p>Nos PLantes exotiques populaires :</p>
            <?php
            foreach ($objProduitFLeuries->produitPopulaire("3") as $res) {
                ?>
                <div class="Produits_Populaire">
                    <a href="PlantesFleuris-<?php echo $res['idProduit'] ?>">
                        <div class="Images_Produits_Populaire"
                             style="background-image: url('./images/images_produits/<?php echo $res['nameProduit'] ?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                        <div class="Info_Produits_Populaire">
                            <h2><?php echo $res['nameProduit'] ?></h2>
                            <h3><?php echo $res['prixProduit'] ?> €</h3>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="PlantesExotiques_Recherche">
            <form method="post">
                <label>Rechercher un produit</label>
                <div class="PlantesExotiques_Recherche_Text">
                    <input type="text" name="rechercher" placeholder="Rechercher"/>
                </div>
                <div class="PlantesExotiques_Recherche_Button">
                    <input type="submit" name="recherche" value="Rechercher"/>
                </div>
            </form>
            <p>La recherche n'est pas soumise aux filtres</p>
        </div>
        <div id="PlantesExotiques_Produit">
            <div class="PlantesExotiques_Trier">
                <span>
                    <label>Filtrer les produits</label>
                </span>
                <div class="PlantesExotiques_Trier_Form">
                    <form method="post">
                        <div class="PlantesExotiques_Trier_Form_Croissant">
                            <label>Prix croissant</label>
                            <input type="radio" name="trier" value="PrixCroissant"/>
                        </div>
                        <div class="PlantesExotiques_Trier_Form_Croissant">
                            <label>Prix décroissant</label>
                            <input type="radio" name="trier" value="PrixDecroissant"/>
                        </div>
                        <div class="PlantesExotiques_Trier_Form_Button">
                            <input type="submit" name="trierButton" value="Filter"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="PlantesExotiques_Liste_Produit">
                <?php
                require "afficheProduitPlantesExotiques.php";
                ?>
            </div>
        </div>
    </div>
</section>