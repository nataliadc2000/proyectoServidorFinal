<?php 

require_once("../model/productDAO.php");

$resultsProPeri = selectProductForPerifericos($pdo);

$pdo = null;

header("./view/productView.php");
?>