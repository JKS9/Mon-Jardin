<?php
$objProfile = new profil($connect);

if(isset($_POST['SaveProfil'])) {
    $name = addslashes($_POST['name']);
    $firstName = addslashes($_POST['firstName']);
    $login = addslashes($_POST['Login']);
    $email = addslashes($_POST['email']);
    $id = $_SESSION['user'];

    if(empty($name) && empty($firstName) && empty($login) && empty($email)){

    }else if(!empty($name) | !empty($firstName) | !empty($login) | !empty($email)){
        if(!empty($name)){
            if (preg_match("/^[a-zA-Z-'\s]+$/", "$name")) {
                $update .= "name = '$name', ";
            }else{
                $erreur = "<h4>Nom incorrecte</h4>";
            }
        }
        if(!empty($firstName)){
            if (preg_match("/^([a-zA-Z' ]+)$/", "$firstName")) {
                $update .= "firstName = '$firstName', ";
            }else{
                $erreur = "<h4>Prénom incorrecte</h4>";
            }
        }
        if(!empty($login)){
            if (preg_match("/^[a-zA-Z-'\s]+$/", "$login")) {
                $update .= "Login = '$login', ";
            }else{
                $erreur = "<h4>Login incorrecte</h4>";
            }
        }
        if(!empty($email)){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $update .= "email = '$email', ";
            }else{
                $erreur = "<h4>Email incorrecte</h4>";
            }
        }
        $update .= "actif = 1 WHERE id = $id";
        $objProfile->ModifeInfoProfil($update);
    }
}
?>