<?php 

require_once("../model/productDAO.php");

$orden="nombre_asc";
$resultsProTeclas = selectProductForTeclas($pdo,$orden);

$pdo = null;

header("./view/productView.php");
?>