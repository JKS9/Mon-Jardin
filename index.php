<?php
require "config.php";
require "controller/produit.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mon Jardin</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>
<body>
<?php

$LienPages = array('Home', 'PlantesVertes', 'PlantesFleuris', 'PlantesExotiques', 'Panier', 'Profile', 'Connexion', 'Register');
$url = "";

if (isset($_SESSION["user"])) {
    require "views/menu_connexion.php";
    if (isset($_GET['p'])) {

        $url = explode('-', $_GET['p']);

        if ($url == "") {

            require "views/Home.php";

        } elseif (in_array($url[0], $LienPages) AND empty($url[1])) {

            require "views/" . $url[0] . ".php";

        } elseif (in_array($url[0], $LienPages) AND !empty($url[1])) {

            if ($objProduitFLeuries->verifeUrl($url[1]) == true) {

                $view = $objProduitFLeuries->addViews($url[1]);
                require "views/produit.php";

            } else {

                require "views/404.php";
            }
        } else {

            require "views/404.php";
        }
    }else{
        require "views/Home.php";
    }
    require "views/Footer_connexion.php";

} else {

    require "views/menu.php";

    if (isset($_GET['p'])) {

        $url = explode('-', $_GET['p']);

        if ($url == "") {

            require "views/Home.php";

        } elseif (in_array($url[0], $LienPages) AND empty($url[1])) {

            require "views/" . $url[0] . ".php";

        } elseif (in_array($url[0], $LienPages) AND !empty($url[1])) {

            if ($objProduitFLeuries->verifeUrl($url[1]) == true) {

                $view = $objProduitFLeuries->addViews($url[1]);
                require "views/produit.php";

            } else {
                require "views/404.php";
            }
        }else{
            require "views/404.php";
        }
    }else{
        require "views/Home.php";
    }
    require "views/Footer.php";
}
?>
</body>
</html>
