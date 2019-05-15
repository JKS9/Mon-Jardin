<?php
foreach($objProfile->infoProfil($_SESSION['user']) as $res){
    ?>
    <div class="Profil_Info_Form">
        <p>Nom : <strong><?php echo $res['name']?></strong></p>
        <p>Prénom : <strong><?php echo $res['firstName']?></strong></p>
        <p>Email : <strong><?php echo $res['email']?></strong></p>
        <p>Login : <strong><?php echo $res['Login']?></strong></p>
    </div>
    <div class="Button_Profil">
        <form method="post">
            <input type="submit" name="ModifProfil" value="Modifier mon profil">
        </form>
    </div>
    <?php
}
?>