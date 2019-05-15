<?php
$erreur = "";
if(isset($_POST['Connexion'])){
    $login = $_POST['Login'];
    $password = $_POST['Password'];

    if($login === "Etienne"){

        if($password === "Juzans"){
            $_SESSION['office'] = "1";
            header('location: index.php');
        }else{
            $erreur = "<p>Password incorrecte !</p>";
        }
    }else{
        $erreur = "<p>Login incorrecte !</p>";
    }
}
?>