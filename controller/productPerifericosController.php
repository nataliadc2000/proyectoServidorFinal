<?php 

require_once("../model/productDAO.php");

$resultsProPeri = selectProductForPerifericos($pdo);

$pdo = null;

header("./view/productView.php");

$listaproducts = [];
function agregarProductosAlCarrito($product){
    array_push($listaproducts, $product);
    $json= json_encode($listaproducts);
    setcookie('products',$json);
}


