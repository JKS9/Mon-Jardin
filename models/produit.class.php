<?php

class produit extends connect
{

    function __construct($connect)
    {
        parent::__construct($connect);
    }

    function afficheProduit($categorie){
        $req = $this->_connect->query("SELECT
Produits.id AS idProduit, Produits.name AS nameProduit, Produits.description AS descriptionProduit, Produits.prix AS prixProduit, Produits.actif AS actifProduit, categories.id_produit AS idProduitCategorie, categories.id_categories 
FROM Produits INNER JOIN categories 
ON id_categories = $categorie  AND categories.id_produit = Produits.id");
        $resReq = $req->fetchAll();
        return $resReq;
    }

    function afficheProduitFiltres($categorie,$order){
        $req = $this->_connect->query("SELECT
Produits.id AS idProduit, Produits.name AS nameProduit, Produits.description AS descriptionProduit, Produits.prix AS prixProduit, Produits.actif AS actifProduit, categories.id_produit AS idProduitCategorie, categories.id_categories 
FROM Produits INNER JOIN categories 
ON id_categories = $categorie  AND categories.id_produit = Produits.id $order");
        $resReq = $req->fetchAll();
        return $resReq;
    }

    function verifeUrl($id){
        $req = $this -> _connect -> query("SELECT id FROM Produits");
        $res = $req -> fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        foreach($res as $r){
            array_push($array,$r['id']);
        }
        if(in_array($id, $array)){
            return true;
        }else{
            return false;
        }
    }

    function recherche($categorie, $recherche){
        $req = $this -> _connect ->query("SELECT
Produits.id AS idProduit, Produits.name AS nameProduit, Produits.description AS descriptionProduit, Produits.prix AS prixProduit, Produits.actif AS actifProduit, categories.id_produit AS idProduitCategorie, categories.id_categories 
FROM Produits INNER JOIN categories ON id_categories = $categorie AND categories.id_produit = Produits.id AND Produits.name LIKE '%$recherche%'");
        $resReq = $req->fetchAll();
        return $resReq;
    }

    function addViews($id){
        $req = $this -> _connect -> exec("UPDATE Produits SET `view`= `view` + 1 WHERE id = $id");
    }

    function produitPopulaire($categorie){
        $req = $this -> _connect -> query("SELECT Produits.id AS idProduit, Produits.name AS nameProduit, Produits.description AS descriptionProduit, Produits.prix AS prixProduit, Produits.actif AS actifProduit, Produits.view AS Produitview, categories.id_produit AS idProduitCategorie, categories.id_categories 
FROM Produits INNER JOIN categories ON id_categories = $categorie AND categories.id_produit = Produits.id ORDER BY Produitview DESC LIMIT 5");
        $resReq = $req->fetchAll();
        return $resReq;
    }

    function produitPopulaireAll(){
        $req = $this -> _connect -> query("SELECT * FROM Produits ORDER BY view DESC LIMIT 5");
        $resReq = $req->fetchAll();
        return $resReq;
    }

    function AfficheUnProduit($id){
        $req = $this -> _connect -> query("SELECT * FROM Produits WHERE id = $id");
        $resReq = $req -> fetchall();
        return $resReq;
    }

    function addProduitPanier($idusers, $idProduit, $nbProduit){
        $req_Verife_Produit = $this -> _connect -> query("SELECT * FROM Produits_commande WHERE id_users='$idusers' AND id_produit='$idProduit' AND etat = '0'");
        $row=$req_Verife_Produit->rowCount();

        if($row > 0 ){
            $req_add_nb = $this -> _connect -> exec("UPDATE Produits_commande SET nb_produit = nb_produit + $nbProduit WHERE id_users='$idusers' AND id_produit='$idProduit' AND etat = '0'");
        }else{
            $reqAdd = $this -> _connect -> exec("INSERT INTO `Produits_commande`(id_produit, nb_produit, id_users, etat) VALUES ('$idProduit', '$nbProduit', '$idusers','0')");
        }
    }

    function nbPanier($idusers){
        $req = $this -> _connect ->query("SELECT * FROM Produits_commande WHERE id_users='$idusers' AND etat = '0'");
        $nb = $req->rowCount();

        if($nb > 0){
            $res = $req -> fetchAll();
            return $res;
        }else{
            return false;
        }
    }

    function DeleteProduitPanier($idusers, $idProduit){
        $id = "";
        $nbProduit = "";

        $req = $this -> _connect -> query("SELECT * FROM Produits_commande WHERE id_users ='$idusers' AND id = '$idProduit' AND etat = 0");
        $nb = $req -> fetchAll();
        foreach ($nb as $res){
            $id = $res['id'];
            $nbProduit = $res['nb_produit'];
        }
        if($nbProduit > 1){
            $req_Delete_One = $this -> _connect -> exec("UPDATE Produits_commande SET nb_produit = nb_produit - 1 WHERE id = '$id'");
        }else{
            $req_Delete_All = $this -> _connect -> exec("DELETE FROM Produits_commande WHERE id = '$id'");
        }
    }

    function AddCommande($idUser,$Date,$Number,$Rue,$Ville,$Postal){
        $id = "";
        $req = $this -> _connect -> exec("INSERT INTO `Commande`(`id_users`, `date`, `numero`, `rue`, `ville`, `codePostal`) VALUES ('$idUser','$Date','$Number','$Rue','$Ville','$Postal')");

        $req_Select_Commande = $this -> _connect -> query("SELECT * FROM Commande WHERE id_users = '$idUser' ORDER BY id DESC LIMIT 1");
        $res_Select_Commande = $req_Select_Commande -> fetchAll();
        foreach ($res_Select_Commande as $resCommande){
            $id = $resCommande['id'];
        }
        $req_Add_Id_Commande = $this -> _connect -> exec("UPDATE Produits_commande SET id_commande = '$id',etat = '1' WHERE id_users = '$idUser' AND etat = '0'");

    }
}

?>