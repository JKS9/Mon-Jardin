<?php
if(isset($_POST['AddPanier'])){
    $idProduit = $_POST['idProduit'];
    $NbProduit = $_POST['NbProduit'];

    if(isset($_SESSION['user'])){
        $erreur = "<div class='True_Add_Produit'><p>Le produit à été ajouté à votre panier</p></div>";
        $addProduit = $objProduitFLeuries->addProduitPanier($_SESSION['user'],$idProduit,$NbProduit);
    }else{
        $erreur = "<div class='False_Add_Produit'><p>Veuillez vous <a href='Connexion'>connectez</a> pour pouvoir ajouter un article à votre panier</p></div>";
    }
}
?>