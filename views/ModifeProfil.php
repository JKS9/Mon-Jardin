<?php
foreach ($objProfile->infoProfil($_SESSION['user']) as $res) {
    ?>
    <div class="Profil_Info_Form">
        <form method="post">
            <div class="Profil_Info_Form_Ligne">
                <label>Nom :</label>
                <input type="text" name="name" placeholder="<?php echo $res['name'] ?>"/>
            </div>
            <div class="Profil_Info_Form_Ligne">
                <label>Prénom :</label>
                <input type="text" name="firstName" placeholder="<?php echo $res['firstName'] ?>"/>
            </div>
            <div class="Profil_Info_Form_Ligne">
                <label>Email :</label>
                <input type="text" name="email" placeholder="<?php echo $res['email'] ?>"/>
            </div>
            <div class="Profil_Info_Form_Ligne">
                <label>Login :</label>
                <input type="text" name="Login" placeholder="<?php echo $res['Login'] ?>"/>
            </div>
            <div class="Button_Modife_Profil">
                <input type="submit" name="SaveProfil" value="Sauvegarder">
            </div>
        </form>
    </div>
    <?php
}
?>