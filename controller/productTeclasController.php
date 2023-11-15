<?php 

require_once("../model/productDAO.php");

$resultsProTeclas = selectProductForTeclas($pdo);

$pdo = null;

header("./view/productView.php");
?>