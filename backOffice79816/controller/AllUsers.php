<?php
$erreur = "";
$nbUsers = "";
$objOffice = new office($connect);
$nbUsers = $objOffice->nbUsers();

if(isset($_POST['Desactiver'])){
    $id = $_POST['idusers'];
    $actif = 0;
    $addProduit = $objOffice->ChangeActif($id,$actif);
    $erreur = "<div class='True'><p>Un utilisateur à été désactiver !</p></div>";
}

if(isset($_POST['activer'])){
    $id = $_POST['idusers'];
    $actif = 1;
    $addProduit = $objOffice->ChangeActif($id,$actif);
    $erreur = "<div class='True'><p>Un utilisateur à été activer !</p></div>";
}

if(isset($_POST['DeleteProduit_x'])){
    $id =$_POST['id'];
    $addProduit = $objOffice->DeleteUser($id);
    $erreur = "<div class='False'><p>Un utilisateur à été DELETE !</p></div>";
}
?>