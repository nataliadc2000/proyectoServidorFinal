<?php 

require_once("../model/productDAO.php");

$orden = "nombre_asc";
$resultsProParts = selectProductForPartsOfTheComputer($pdo,$orden);

$pdo = null;

header("./view/productView.php");
?>