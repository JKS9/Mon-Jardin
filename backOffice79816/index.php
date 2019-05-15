<?php
require "config.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Back Office : Mon Jardin</title>
    <link rel="stylesheet" href="../styles/officeStyle.css">
</head>
<body>
<?php
if (isset($_SESSION['office'])) {
    require "views/officeMenu.php";
    $pages = array("ALLUsers", "ALLProduits", "ADDProduit", "ALLCommande", "ALLPanier", "Deconnexion");
    if (!isset($_GET['i'])) {
        require "./views/ALLUsers.php";
    }
    if (isset($_GET['i'])) {
        $page = $_GET['i'];
        if (in_array($page, $pages)) {
            require "./views/".$page .".php";
        } else {
            require "./views/ALLUsers.php";
        }
    }
} else {
    require "views/Connexion.php";
}
?>
</body>
</html>
