<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .product {
  display: inline-block;
  width: 30%;
  height: 50px;
}
.product img {
    height:100px;
    height:100px;
}
    </style>
</head>
<body>
<header>
    <div style="background-color: azure; width:auto; height:auto" >
        <a style="color:black
        ; font-size: 20px;"> Welcome to the main product page</a>
<a href="./userperfil.php">My perfil</a>     </div>
 </header>
  
 
 <div >
 <a href="javascript:history.back()"><- Go Back</a>

    <footer>    
           <h3>Formulario de Contacto</h3>
           <form method="POST" action="../indexMail.php">
               <label for="nombre">Nombre:</label>
               <input type="text" id="nombre" name="nombre" required><br><br>
        
               <label for="correo">Correo electrónico:</label>
               <input type="email" id="correo" name="correo" required><br><br>
        
               <label for="mensaje">Mensaje:</label>
               <textarea id="mensaje" name="mensaje" required></textarea><br><br>
        
               <input type="submit" value="Enviar">
           </form>
        <h3>Formulario de contacto:</h3>
        <p>telefono movil: 600609013</p>
        <p> correo electronico: ndcarbajosa@gmail.com</p>
    </footer>
</body>
</html>