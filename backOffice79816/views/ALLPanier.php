<?php
require "controller/AllPanier.php";
?>
<section>
    <div id="Liste_Panier">
        <div class="Title">
            <h2>Liste des Produits dans le panier : </h2>
            <div class="barre"></div>
        </div>
        <div class="stat">
            <p>Nombre de Produits dans le panier : <strong><?php echo $nbPanier ?> Produits dans le panier</strong></p>
        </div>
        <div class="Table">
            <?php echo $erreur ?>
            <table>
                <tr class="Table_Menu">
                    <td style="width: 70px;">ID</td>
                    <td style="width: 70px;">Id Commande</td>
                    <td style="width: 70px;">Id Produit</td>
                    <td style="width: 70px;">Nb produit</td>
                    <td style="width: 120px;">Id users</td>
                    <td style="width: 70px;">Etat</td>
                    <td style="width: 120px;">Supprimer</td>
                </tr>
                <?php
                foreach ($objOffice->ListePanier() as $res){
                    ?>
                    <tr class="Table_Panier">
                        <td><?php echo $res['id'] ;?></td>
                        <td><?php echo $res['id_commande'] ;?></td>
                        <td><?php echo $res['id_produit'] ;?></td>
                        <td><?php echo $res['nb_produit'] ;?></td>
                        <td><?php echo $res['id_users'] ;?></td>
                        <td><?php if($res['etat'] == 0 ){ echo "Non payer";}else{ echo "Payer";};?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="idPanier" value="<?php echo $res['id'] ?>"/>
                                <input name="DeletePanier" type="image" src="./../images/icones/delete-button.svg"
                                       style="width: 30px; height: 35px;">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>

