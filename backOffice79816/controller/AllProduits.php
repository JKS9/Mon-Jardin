<?php
$erreur = "";
$nbProduits = "";
$objOffice = new office($connect);
$nbProduits = $objOffice->nbProduits();

if(isset($_POST['Desactiver'])){
    $id = $_POST['idProduits'];
    $actif = 0;
    $addProduit = $objOffice->ChangeActifProduits($id,$actif);
    $erreur = "<div class='True'><p>Un produits à été désactiver !</p></div>";
}

if(isset($_POST['activer'])){
    $id = $_POST['idProduits'];
    $actif = 1;
    $addProduit = $objOffice->ChangeActifProduits($id,$actif);
    $erreur = "<div class='True'><p>Un produits à été activer !</p></div>";
}

if(isset($_POST['DeleteProduit_x'])){
    $id = $_POST['idProduits'];
    $name = $_POST['name'];
    $DeleteProduit = $objOffice->DeleteProduits($id);
    $DeletePicture = $objOffice->DeletePictureProduit($name);
    $DeleteCategorie = $objOffice->DeleteCategorie($id);
    $erreur = "<div class='False'><p>Un produits à été DELETE !</p></div>";
}
?>