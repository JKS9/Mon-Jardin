<section>
    <div id="Home_Header">
        <div class="Home_images_header"></div>
        <div class="Home_texte_header">
            <a href="PlantesVertes-26">
                <h3>Aloe Vera</h3>
            </a>
        </div>
    </div>
</section>
<section>
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
<section>
    <div class="Home_Barre"></div>
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
<section>
    <div class="Home_Barre"></div>
</section>
<section>
    <div id="Home_Univers">
        <div class="Home_Univers_Titre">
            <h2>Nos Univers</h2>
        </div>
        <div class="Home_Univers_Block">
            <div class="Home_Univers_Block_Image1"></div>
            <div class="Home_Univers_Block_Titre">
                <h2>Plantes vertes</h2>
            </div>
            <div class="Home_Univers_Block_Boutton">
                <a href="PlantesVertes">Découvrir</a>
            </div>
        </div>
        <div class="Home_Univers_Block">
            <div class="Home_Univers_Block_Image2"></div>
            <div class="Home_Univers_Block_Titre">
                <h2>Plantes fleurie</h2>
            </div>
            <div class="Home_Univers_Block_Boutton">
                <a href="PlantesFleuris">Découvrir</a>
            </div>
        </div>
        <div class="Home_Univers_Block">
            <div class="Home_Univers_Block_Image3"></div>
            <div class="Home_Univers_Block_Titre">
                <h2>Plantes exotiques</h2>
            </div>
            <div class="Home_Univers_Block_Boutton">
                <a href="PlantesExotiques">Découvrir</a>
            </div>
        </div>
        <div class="Home_Univers_Block">
            <div class="Home_Univers_Block_Image4"></div>
            <div class="Home_Univers_Block_Titre">
                <h2>Mon Panier</h2>
            </div>
            <div class="Home_Univers_Block_Boutton">
                <a href="Panier">Découvrir</a>
            </div>

        </div>
    </div>
</section>