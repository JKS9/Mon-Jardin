<section>
    <?php
    require "controller/connexion.php";
    ?>
    <div id="Connexion">
        <div class="Connexion_Image"></div>
        <div class="Connexion_Formulaire">
            <h3>Connexion</h3>
            <form method="post">
                <div class="Connexion_Form_Login">
                    <label>
                        <p>Login :</p>
                    </label>
                    <input type="text" name="Login"/>
                </div>
                <div class="Connexion_Form_Password">
                    <label>
                        <p>Password :</p>
                    </label>
                    <input type="password" name="Password"/>
                </div>
                <div class="Connexion_Form_Boutton">
                    <input type="submit" name="Connexion" value="Connexion"/>
                </div>
                <div class="Connexion_Form_Error">
                    <p>
                        <?php
                        echo $error;
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>