<?php
$error = "";
if(isset($_POST['Connexion'])){
    $login = $_POST['Login'];
    $password = $_POST['Password'];

    if(preg_match("/^[a-zA-Z-'\s]+$/","$login")){

        if(preg_match("/^[a-z\d_]{5,20}$/i","$password")){

            $objConnect = new connexion($connect);
            $connexion = $objConnect->connexion($login,$password);

        }else{
            $error = "Password incorrecte !";
        }
    }else{
        $error = "Login incorrecte !";
    }
}
?>