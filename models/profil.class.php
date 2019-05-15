<?php

class profil extends connect
{

    function __construct($connect)
    {
        parent::__construct($connect);
    }

    function infoProfil($id){
        $req = $this ->  _connect -> query("SELECT * FROM Users WHERE id = $id");
        $resReq = $req -> fetchAll();
        return $resReq;
    }

    function ModifeInfoProfil($update){
        $sql = "UPDATE Users SET $update";
        $req = $this -> _connect -> exec($sql);
    }

    function AfficheCommande($idUsers){
        $req = $this -> _connect -> query("SELECT * FROM Commande WHERE id_users = '$idUsers'");
        $res = $req -> fetchAll();
        return $res;
    }

    function AfficheProduitCommande($idCommande,$idUser){
        $req = $this -> _connect -> query("SELECT * FROM Produits_commande WHERE id_commande = '$idCommande' AND id_users = '$idUser'");
        $res =  $req -> fetchAll();
        return $res;
    }

    function nbCommande($idUser){
        $req = $this -> _connect -> query("SELECT * FROM Commande WHERE id_users = '$idUser'");
        $nb =  $req -> rowCount();
        return $nb;
    }

    function AfficheInforoduit($idProduit){
        $req = $this -> _connect -> query("SELECT * FROM Produits WHERE id ='$idProduit'");
        $res = $req -> fetchAll();
        return $res;
    }

}
?>