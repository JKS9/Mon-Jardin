<?php
$erreur = "";
$nbPanier = "";
$objOffice = new office($connect);
$nbPanier = $objOffice->nbPanier();

if(isset($_POST['DeletePanier_x'])){
    $id = $_POST['idPanier'];
    $DeleteProduit = $objOffice->DeleteProduitPanier($id);
    $erreur = "<div class='False'><p>Un produits à été DELETE du panier !</p></div>";
}
?>