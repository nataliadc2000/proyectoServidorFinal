
<?php
require_once("../model/workersDAO.php");
$resultsWorkers = selectWorkers($pdo);

$pdo = null;

header("./view/aboutusview.php");

?>