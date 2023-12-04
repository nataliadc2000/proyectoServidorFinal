<?php 

require_once("../model/productDAO.php");

$resultsPro = selectproducts($pdo);

$pdo = null;

header("./view/productView.php");
?>