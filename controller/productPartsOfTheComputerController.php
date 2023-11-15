<?php 

require_once("../model/productDAO.php");

$resultsProParts = selectProductForPartsOfTheComputer($pdo);

$pdo = null;

header("./view/productView.php");
?>