<?php
if (isset($_POST['recherche'])) {
    $recherche = $_POST['rechercher'];
    echo "<div class='Taille_Liste_Produit' style=' height: 950px; width: 100%;'>";
    foreach ($objProduitFLeuries->recherche("2", $recherche) as $res) {
        ?>
        <div class="Produits">
            <a href="PlantesFleuris-<?php echo $res['idProduit']?>">
                <div class="Images_Produit" style="background-image: url('./images/images_produits/<?php echo $res['nameProduit']?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                <div class="Info_Produits">
                    <h2><?php echo $res['nameProduit'] ?></h2>
                    <h3><?php echo $res['prixProduit'] ?> €</h3>
                </div>
            </a>
        </div>
        <?php
    }
    echo "</div>";
} else {
    if (isset($_POST['trierButton'])) {
        if ($_POST['trier'] == 'PrixCroissant') {
            echo "<div class='Taille_Liste_Produit' style=' height: 2050px; width: 100%;'>";
            foreach ($objProduitFLeuries->afficheProduitFiltres("2", "ORDER BY prixProduit ASC") as $res) {
                ?>
                <div class="Produits">
                    <a href="PlantesFleuris-<?php echo $res['idProduit']?>">
                        <div class="Images_Produit" style="background-image: url('./images/images_produits/<?php echo $res['nameProduit']?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                        <div class="Info_Produits">
                            <h2><?php echo $res['nameProduit'] ?></h2>
                            <h3><?php echo $res['prixProduit'] ?> €</h3>
                        </div>
                    </a>
                </div>
                <?php
            }
            echo "</div>";
        } else if ($_POST['trier'] == 'PrixDecroissant') {
            echo "<div class='Taille_Liste_Produit' style=' height: 2050px; width: 100%;'>";
            foreach ($objProduitFLeuries->afficheProduitFiltres("2", "ORDER BY prixProduit DESC") as $res) {
                ?>
                <div class="Produits">
                    <a href="PlantesFleuris-<?php echo $res['idProduit']?>">
                        <div class="Images_Produit" style="background-image: url('./images/images_produits/<?php echo $res['nameProduit']?>.jpg'); width: 100%; height: 200px; background-size: cover;"></div>
                        <div class="Info_Produits">
                            <h2><?php echo $res['nameProduit'] ?></h2>
                            <h3><?php echo $res['prixProduit'] ?> €</h3>
                        </div>
                    </a>
                </div>
                <?php
            }
            echo "</div>";
        }
    } else {
        echo "<div class='Taille_Liste_Produit' style=' height: 2050px; width: 100%;'>";
        foreach ($objProduitFLeuries->afficheProduit("2") as $res) {
            ?>
            <div class="Produits">
                <a href="PlantesFleuris-<?php echo $res['idProduit']?>">
                    <div class="Images_Produit" style="background-image: url('./images/images_produits/<?php echo $res['nameProduit']?>.jpg');border-radius: 3px;; width: 100%; height: 200px; background-size: cover;"></div>
                    <div class="Info_Produits">
                        <h2><?php echo $res['nameProduit'] ?></h2>
                        <h3><?php echo $res['prixProduit'] ?> €</h3>
                    </div>
                </a>
            </div>
            <?php
        }
        echo "</div>";
    }
}
?>