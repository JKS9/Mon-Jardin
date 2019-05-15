<?php
require "controller/AllUsers.php"
?>
<section>
    <div id="Liste_Users">
        <div class="Title">
            <h2>Liste des utilisateurs : </h2>
            <div class="barre"></div>
        </div>
        <div class="stat">
            <p>Nombre d'utilisateur inscrits sur le site : <strong><?php echo $nbUsers ?> utilisateurs</strong></p>
        </div>
        <div class="Table">
            <?php echo $erreur ?>
            <table>
                <tr class="Table_Menu">
                    <td>ID</td>
                    <td>Name</td>
                    <td>First Name</td>
                    <td>Login</td>
                    <td>Email</td>
                    <td>Actif</td>
                    <td>modifer</td>
                    <td>Supprimer</td>
                </tr>
                <?php
                foreach ($objOffice->ListeUsers() as $res){
                    ?>
                    <tr class="Table_User">
                        <td><?php echo $res['id'] ;?></td>
                        <td><?php echo $res['name'] ;?></td>
                        <td><?php echo $res['firstName'] ;?></td>
                        <td><?php echo $res['Login'] ;?></td>
                        <td><?php echo $res['email'] ;?></td>
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
                                echo "<div class='modifeActif'><form method='post'><input type='hidden' name='idusers' value='".$res['id']."'/><input type='submit' name='Desactiver' value='Désactiver'/></form></div>";
                            }else{
                                echo "<div class='modifeActif'><form method='post'><input type='hidden' name='idusers' value='".$res['id']."'/><input type='submit' name='activer' value='Activer'/></form></div>";
                            }
                            ?>
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $res['id'] ?>"/>
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