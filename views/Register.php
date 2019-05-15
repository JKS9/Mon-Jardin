<?php
require "controller/register.php";
?>
<section>
    <div id="Register">
        <div class="Register_Image"></div>
        <div class="Register_Formulaire">
            <h3>Inscription</h3>
            <form method="post">
                <div class="Register_Form">
                    <label>
                        <p>Nom :</p>
                    </label>
                    <input type="text" name="Name"/>
                </div>
                <div class="Register_Form">
                    <label>
                        <p>Prénom :</p>
                    </label>
                    <input type="text" name="firstName"/>
                </div>
                <div class="Register_Form">
                    <label>
                        <p>Login :</p>
                    </label>
                    <input type="text" name="Login"/>
                </div>
                <div class="Register_Form">
                    <label>
                        <p>Password :</p>
                    </label>
                    <input type="password" name="Password"/>
                </div>
                <div class="Register_Form">
                    <label>
                        <p>Email :</p>
                    </label>
                    <input type="email" name="Email"/>
                </div>
                <div class="Register_Form_Boutton">
                    <input type="submit" name="Inscription" value="Inscription"/>
                </div>
                <div class="Register_Error">
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