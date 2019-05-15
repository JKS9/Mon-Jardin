<?php
$erreur = "";
$objOffice = new office($connect);

if(isset($_POST['ADDProduits'])){
    $idProduits = "";
    $name = addslashes($_POST['name']);
    $Biography = addslashes($_POST['Biography']);
    $Price = addslashes($_POST['Price']);
    $Actif = $_POST['Actif'];
    $ChoseCategorie = $_POST['ChoseCategorie'];
    $namePictures= $_FILES['pictures']['name'];
    $tmpName= $_FILES['pictures']['tmp_name'];
    $error= $_FILES['pictures']['error'];

    if(preg_match("/^[a-zA-Z-'\s]+$/","$name")){
        $nbName = $objOffice->nbName($name);

        if($nbName == 0){

                if(preg_match("/^[0-9]*$/", "$Price")){

                    if($error==0){
                        $objOffice->ADDProduits($name, $Biography, $Price, $Actif);

                        $dossier = "../images/images_produits/";
                        move_uploaded_file($tmpName,$dossier.$name.'.jpg');

                        foreach ($objOffice->nbIdProduits($name) as $res){
                            $idProduits = $res['id'];
                        }

                        $objOffice->ADDCategorie($idProduits, $ChoseCategorie);

                        $erreur = "<div class='Erreur'><h4>Produit ajouter sur le site !</h4></div>";

                    }else{
                        $erreur = "<div class='Erreur'><p>Erreur : image incorrect</p></div>";
                    }

                }else{
                    $erreur = "<div class='Erreur'><p>Prix incorrect ! seul les nombres sont accepter.</p></div>";
                }
        }else{
            $erreur = "<div class='Erreur'><p>Le nom existe déjà ! veuillez changer de nom.</p></div>";
        }

    }else{
        $erreur = "<div class='Erreur'><p>orthographe du nom incorrect !</p></div>";
    }
}
?>