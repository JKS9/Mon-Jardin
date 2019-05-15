<?php
$erreur = "";
$objPanier = new produit($connect);

if(isset($_POST['DeleteProduit_x'])){
    $idusers = $_SESSION['user'];
    $idProduit = $_POST['idProduit'];

    $delete = $objPanier->DeleteProduitPanier($idusers, $idProduit);
}

if(isset($_POST['commande'])){
    $id_User = $_SESSION['user'];
    $Date = date('Y-m-d');
    $Number = addslashes($_POST['number']);
    $rue = addslashes($_POST['rue']);
    $Ville = addslashes($_POST['Ville']);
    $Postal = addslashes($_POST['Postal']);

    if(preg_match("/^[0-9]*$/","$Number")){

        if(preg_match("/^[a-zA-Z ]*$/","$rue")){

            if(preg_match("/^[a-zA-Z-'\s]+$/","$Ville")){

                if(preg_match("/^[0-9]*$/","$Postal")){
                    $addCommande = $objPanier->AddCommande($id_User,$Date,$Number,$rue,$Ville,$Postal);
                    require "views/Validation.php";
                }else{
                    $erreur = "<p>Code postal incorrect !</p>";
                }
            }else{
                $erreur = "<p>Ville incorrect !</p>";
            }
        }else{
            $erreur = "<p>Rue incorrect !</p>";
        }
    }else{
        $erreur = "<p>Numéro de rue incorrect !</p>";
    }
}
?>