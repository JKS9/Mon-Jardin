<?php
require "controller/connexion.php";
?>
<section>
    <div class="Connexion_Form">
        <div class="Logo"></div>
        <form method="post">
            <div class="Form">
                <label>Login : </label>
                <input type="text" name="Login"/>
                <label>Password :</label>
                <input type="password" name="Password"/>
            </div>
            <div class="Office_Connexion_Button">
                <input type="submit" name="Connexion" value="Connexion"/>
            </div>
            <?php echo $erreur ?>
        </form>
    </div>
</section>