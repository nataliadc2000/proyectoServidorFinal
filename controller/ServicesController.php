<?php 

require_once("../model/servicesDAO.php");

$resultsProPeri = selectservices($pdo);

$pdo = null;

header("./view/productView.php");
?>