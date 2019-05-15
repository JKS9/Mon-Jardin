<?php
$error = "";
if(isset($_POST['Inscription'])){

    $name = addslashes($_POST['Name']);
    $firstName = addslashes($_POST['firstName']);
    $login = addslashes($_POST['Login']);
    $password = addslashes($_POST['Password']);
    $email = addslashes($_POST['Email']);

    if(preg_match("/^[a-zA-Z-'\s]+$/","$name")){

        if(preg_match("/^([a-zA-Z' ]+)$/","$firstName")){

            if(preg_match("/^[a-zA-Z-'\s]{3,15}+$/","$login")){

                if(preg_match("/^[a-z\d_]{5,20}$/i","$password")){

                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        $objRegister = new register($connect);
                        $register = $objRegister->register($name,$firstName,$login,$password,$email);

                    }else{
                        $error = "Email incorrecte ! ";
                    }
                }else{
                    $error = "Password incorrecte ! ";
                }
            }else{
                $error = "Login incorrecte ! ";
            }
        }else{
            $error = "Prénom incorrecte ! ";
        }
    }else{
        $error = "Nom incorrecte ! ";
    }



}

?>