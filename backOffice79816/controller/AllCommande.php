<?php
$erreur = "";
$nbCommande = "";
$objOffice = new office($connect);
$nbCommande = $objOffice->nbCommande();

if(isset($_POST['DeleteCommande_x'])){
    $id = $_POST['idCommande'];
    $DeleteProduitCommande = $objOffice->DeleteProduitCommande($id);
    $DeleteCommande = $objOffice->DeleteCommande($id);
    $erreur = "<div class='False'><p>Une Commande à été DELETE !</p></div>";
}
?>