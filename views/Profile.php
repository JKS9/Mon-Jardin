<?php
$erreur = "";
$update = "";
require "controller/profil.php";
?>
<section>
    <div id="Profil">
        <div id="Profil_Info_Users">
            <h3>Mes information personnelles</h3>
            <?php
            if (isset($_POST['ModifProfil'])) {
                require "ModifeProfil.php";
            } else {
                require "AfficheFormProfil.php";
            }
            echo $erreur;
            ?>
        </div>
        <div id="Profil_Info_Commande">
            <h3>historique de commande</h3>
            <?php
            $idUser = $_SESSION['user'];
            if ($objProfile->nbCommande($idUser) > 0) {
                $total = 0;
                foreach ($objProfile->AfficheCommande($idUser) as $res) {
                    $idCommande = $res['id'];
                    ?>
                    <div class="Profile_Commmande">
                        <div class="Profile_Commmande_Info">
                            <ul>
                                <li><p>Numéro de commande : <strong><?php echo $res['id']; ?></strong></p></li>
                                <li><p>Date de commande : <strong><?php echo $res['date']; ?></strong></p></li>
                                <li><p>Adresse de livraison : <strong>
                                            <?php echo $res['numero']; ?> <?php echo $res['rue']; ?>
                                            , <?php echo $res['ville']; ?> <?php echo $res['codePostal']; ?>
                                        </strong></p></li>
                            </ul>
                        </div>
                        <div class="Profile_Commmande_Produit">
                            <table>
                                <tr class="Table_Menu">
                                    <td>&nbsp;</td>
                                    <td><strong>Produit</strong></td>
                                    <td><strong>Nombre</strong></td>
                                    <td><strong>Prix</strong></td>
                                    <td><strong>Total</strong></td>
                                </tr>
                                <?php
                                foreach ($objProfile->AfficheProduitCommande($idCommande, $idUser) as $resProduit) {
                                    $idProduit = $resProduit['id_produit'];
                                    $nbProduit = $resProduit['nb_produit'];

                                    foreach ($objProfile->AfficheInforoduit($idProduit) as $resInfoProduit) {
                                        $calcule1 = $resInfoProduit['prix'];
                                        $calcule2 = $nbProduit;
                                        $resCalcul = $calcule1 * $calcule2;
                                        $total += $resCalcul;
                                        $tva = ($total * 20) / 100;
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="Profile_Commmande_Produit_Picture"
                                                     style="background-image: url('./images/images_produits/<?php echo $resInfoProduit['name'] ?>.jpg'); width: 35px; height: 35px; background-size: cover; margin: 0 auto;">
                                                </div>
                                            </td>
                                            <td>
                                                <p><?php echo $resInfoProduit['name']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $nbProduit; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $resInfoProduit['prix']; ?> €</p>
                                            </td>
                                            <td>
                                                <p><?php echo $resCalcul; ?> €</p>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <div class="Home_Barre"></div>
                        <div class="Profile_Commmande_Total">
                            <div class="Profile_Commmande_Total_Text">
                                <p>Prix total HT</p></td>
                                <h4><?php echo $total; ?> €</h4>
                            </div>
                            <div class="Profile_Commmande_Text_Tva">
                                <p>TVA</p>
                                <h4><?php echo $tva; ?> €</h4>
                            </div>
                            <div class="Profile_Commmande_Text_TTC">
                                <p>Prix total TTC</p>
                                <h4><?php echo $total + $tva ?> €</h4>
                            </div>
                        </div>
                    </div>
                    <?php
                    $total = 0;
                }
            } else {
                ?>
                <div class="Profil_Info_Nocommande">
                    <p>Vous n'avez pas d'historique de commande.</p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
