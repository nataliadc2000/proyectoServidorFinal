<!DOCTYPE html>
<html>
 <head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es mi portfolio personal">
    <meta name="keywords" content="html, css, sass, bootstrap, js, portfolio, proyectos">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Tu nombre's portfolio</title>

</head>
 <body>
 <div id="login" class="container"> 
        <form action="../view/login.php" method="POST" class="mt-2 mx-auto">
            <fieldset class="form-row reset p-4 align-items-center border border-primary ">
                <legend class="reset text-primary border border-primary px-2 py-1">Login</legend>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="username" class="col-sm-2 col-form-label text-primary">username:</label>
                    <div class="col input-group mb-2">
                        
                        <input type="text" id="username" class="form-control text-info" name="username" />
                    </div>
                </div>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="pass" class="col-sm-2 col-form-label text-primary">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="pass" class="form-control text-info" name="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Debe contener al menos un número y una mayúscula y una minúscula, y al menos 8 o más carácteres"/>
                    </div>
                </div>
                <div class="row g-3 mt-2 2-25 mx-auto">
                <!-- <a href="../view/LoginView.php">You're already registered. Log in</a> -->
 <a href="../view/RegistroView.php">You haven't registered. Register Now</a>

                </div>
                <div class="row g-3 mt-2 w-25 mx-auto">
                    <input id="sendBttn2" class="btn btn-primary btn-lg" type="submit" value="Send" name="submit"/>
                </div>
            </fieldset>
        </form>
    </div>
 </body>
 </html>