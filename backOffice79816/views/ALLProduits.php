<?php
require "controller/AllProduits.php";
?>
<section>
    <div id="Liste_Produits">
        <div class="Title">
            <h2>Liste des Produits : </h2>
            <div class="barre"></div>
        </div>
        <div class="stat">
            <p>Nombre de Produits sur le site : <strong><?php echo $nbProduits ?> produits</strong></p>
        </div>
        <div class="Table">
            <?php echo $erreur ?>
            <table>
                <tr class="Table_Menu">
                    <td>&nbsp;</td>
                    <td style="width: 60px;">ID</td>
                    <td >Name</td>
                    <td>Biography</td>
                    <td style="width: 60px;">Prix</td>
                    <td style="width: 60px;">Vieux</td>
                    <td style="width: 80px;">Actif</td>
                    <td style="width: 140px;">modifer</td>
                    <td style="width: 100px;">Supprimer</td>
                </tr>
                <?php
                foreach ($objOffice->ListeProduits() as $res){
                    ?>
                    <tr class="Table_Produits">
                        <td><div class="Picture_Produit" style="background-image: url('./../images/images_produits/<?php echo $res['name'] ?>.jpg'); background-size: cover; width: 40px; height: 40px;"></div></td>
                        <td><?php echo $res['id'] ;?></td>
                        <td><?php echo $res['name'] ;?></td>
                        <td class="Produit_Bio"><?php echo $res['description'] ;?></td>
                        <td><?php echo $res['prix'] ;?></td>
                        <td><?php echo $res['view'] ;?></td>
                        <td><?php
                            if($res['actif'] == 1 ){
                                echo "<div id='Actif'><p>Activer</p></div>";
                            }else{
                                echo "<div id='Inactif'><p>Désactiver</p></div>";
                            }
                            ?>
                        </td>
                        <td><?php
                            if($res['actif'] == 1 ){
                                echo "<div class='modifeActif'><form method='post'><input type='hidden' name='idProduits' value='".$res['id']."'/><input type='submit' name='Desactiver' value='Désactiver'/></form></div>";
                            }else{
                                echo "<div class='modifeActif'><form method='post'><input type='hidden' name='idProduits' value='".$res['id']."'/><input type='submit' name='activer' value='Activer'/></form></div>";
                            }
                            ?>
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="idProduits" value="<?php echo $res['id'] ?>"/>
                                <input type="hidden" name="name" value="<?php echo $res['name'] ?>"/>
                                <input name="DeleteProduit" type="image" src="./../images/icones/delete-button.svg"
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
