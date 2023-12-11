<?php 
require_once("../controller/workersController.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
} */

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.product {
    display: inline-block;
    width: 300%;
    height: 50px;
    border: 1px solid black;
}
.product img {
    height: 100px;
    width: 100px;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
<a href="javascript:history.back()"><- Go Back</a>
  <h1>About Us Page</h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">

  <form action="../controller/workersController.php">

  <div style="width: 100%;">
    <?php foreach($resultsWorkers as $product): ?>
       <div class="product">
        <img src=<?= $product['imagenworkers'];?>></img>
        <h2><?= $product['nameworkers']; ?></h2>
        <p><?= $product['perfilworkers']; ?></p>
        <p>Nacionality: <?= $product['nacionalityworkers']; ?></p>
       </div><!-- <button id="btnAnadir" onclick="agregarProductosAlCarrito($product)"></button> -->
        <?php endforeach; ?>
       </div>
    </div>
  </form>
  
</div>

</body>
</html>