<?php 

require_once("../model/usersDAO.php");

$results = selectUsuarios($pdo);

$pdo = null;

header("./view/usuariosView.php");
?>