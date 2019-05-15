<?php
require "controller/AllCommande.php";
?>
<section>
    <div id="Liste_Commande">
        <div class="Title">
            <h2>Liste des Produits : </h2>
            <div class="barre"></div>
        </div>
        <div class="stat">
            <p>Nombre de Commande sur le site : <strong><?php echo $nbCommande ?> commandes</strong></p>
        </div>
        <div class="Table">
            <?php echo $erreur ?>
            <table>
                <tr class="Table_Menu">
                    <td style="width: 70px;">ID</td>
                    <td style="width: 70px;">Id User</td>
                    <td style="width: 70px;">Date</td>
                    <td style="width: 70px;">Numéro</td>
                    <td style="width: 120px;">Rue</td>
                    <td style="width: 70px;">Ville</td>
                    <td style="width: 70px;">Code postal</td>
                    <td style="width: 120px;">Supprimer</td>
                </tr>
                <?php
                foreach ($objOffice->ListeCommandes() as $res){
                    ?>
                    <tr class="Table_Commande">
                        <td><?php echo $res['id'] ;?></td>
                        <td><?php echo $res['id_users'] ;?></td>
                        <td><?php echo $res['date'] ;?></td>
                        <td><?php echo $res['numero'] ;?></td>
                        <td><?php echo $res['rue'] ;?></td>
                        <td><?php echo $res['ville'] ;?></td>
                        <td><?php echo $res['codePostal'] ;?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="idCommande" value="<?php echo $res['id'] ?>"/>
                                <input name="DeleteCommande" type="image" src="./../images/icones/delete-button.svg"
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
