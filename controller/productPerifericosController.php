<?php 

require_once("../model/productDAO.php");

$resultsProPeri = selectProductForperipherals($pdo);

$pdo = null;

header("./view/productView.php");


function agregarProductosAlCarrito($product){
    
}
?>