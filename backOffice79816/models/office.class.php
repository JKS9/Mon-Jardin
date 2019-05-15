<?php

class office extends connect
{

    function __construct($connect)
    {
        parent::__construct($connect);
    }

    function ADDProduits($name, $biography, $prix, $actif){
        $req = $this -> _connect -> exec("INSERT INTO Produits (`name`, `description`, `prix`, `actif`) VALUES ('$name','$biography','$prix','$actif')");
    }

    function ADDCategorie($idProduits, $idCategories){
        $req = $this -> _connect -> exec("INSERT INTO categories (`id_produit`, `id_categories`) VALUES ('$idProduits','$idCategories')");
    }

    function ListeUsers(){
        $req = $this -> _connect -> query("SELECT * FROM Users");
        $res = $req->fetchAll();
        return $res;
    }

    function ListeProduits(){
        $req = $this -> _connect -> query("SELECT * FROM Produits");
        $res = $req->fetchAll();
        return $res;
    }

    function ListeCommandes(){
        $req = $this -> _connect -> query("SELECT * FROM Commande");
        $res = $req->fetchAll();
        return $res;
    }

    function ListePanier(){
        $req = $this -> _connect -> query("SELECT * FROM Produits_commande");
        $res = $req->fetchAll();
        return $res;
    }

    function nbUsers(){
        $req = $this -> _connect -> query("SELECT * FROM Users");
        $nb = $req -> rowCount();
        return $nb;
    }

    function nbProduits(){
        $req = $this -> _connect -> query("SELECT * FROM Produits");
        $nb = $req -> rowCount();
        return $nb;
    }

    function nbCommande(){
        $req = $this -> _connect -> query("SELECT * FROM Commande");
        $nb = $req -> rowCount();
        return $nb;
    }

    function nbPanier(){
        $req = $this -> _connect -> query("SELECT * FROM Produits_commande");
        $nb = $req -> rowCount();
        return $nb;
    }

    function nbIdProduits($name){
        $req = $this -> _connect -> query("SELECT id, name FROM Produits WHERE name = '$name'");
        $res = $req -> fetchAll();
        return $res;
    }

    function nbName($name){
        $req = $this -> _connect -> query("SELECT * FROM Produits WHERE name = '$name'");
        $nb = $req -> rowCount();
        return $nb;
    }

    function ChangeActif($id,$actif){
        $req = $this -> _connect -> exec("UPDATE `Users` SET actif = '$actif' WHERE id='$id'");
    }

    function ChangeActifProduits($id,$actif){
        $req = $this -> _connect -> exec("UPDATE `Produits` SET actif = '$actif' WHERE id='$id'");
    }

    function DeleteUser($id){
        $req = $this -> _connect -> exec("DELETE FROM `Users` WHERE id = '$id'");
    }

    function DeleteProduits($id){
        $req = $this -> _connect -> exec("DELETE FROM `Produits` WHERE id = '$id'");
    }

    function DeleteCommande($id){
        $req = $this -> _connect -> exec("DELETE FROM `Commande` WHERE id = '$id'");
    }

    function DeleteProduitCommande($id){
        $req = $this -> _connect -> exec("DELETE FROM `Produits_commande` WHERE id_commande = '$id'");
    }

    function DeleteProduitPanier($id){
        $req = $this -> _connect -> exec("DELETE FROM `Produits_commande` WHERE id = '$id'");
    }

    function DeleteCategorie($id){
        $req = $this -> _connect -> exec("DELETE FROM `categories` WHERE id_produit = '$id'");
    }

    function DeletePictureProduit($NamePicture){
        $file = "./../images/images_produits/".$NamePicture.".jpg";
        unlink("$file");
    }


}
?>