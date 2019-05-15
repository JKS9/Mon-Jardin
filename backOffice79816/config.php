<?php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=MonJardin','root', '11981997*');
$connect->exec("SET NAMES 'UTF8'");

spl_autoload_register('chargerClasse');

$classe = "";
function chargerClasse($classe){
    include 'models/' . $classe . '.class.php';
}


?>