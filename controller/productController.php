<?php 

require_once("../model/productDAO.php");

$results = selectproducts($pdo);

$pdo = null;

header("./view/productView.php");
?>