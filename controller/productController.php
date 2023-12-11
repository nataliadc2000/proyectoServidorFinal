<?php 

require_once("../model/productDAO.php");

$orden = "nombre_asc";
$resultsPro = selectproducts($pdo,$orden);

$pdo = null;

header("./view/productView.php");
?>