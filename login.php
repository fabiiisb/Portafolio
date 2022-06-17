
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon-admin.ico">
    <!-- fonts -->

     <link rel="stylesheet" href="styles/login.css" >
    <title>Login</title>
</head>
<body>
    <form action="logic/validation.php" method="post">

        <h1>Iniciar sesión</h1>
        <input type="usser" placeholder="Ingrese su nombre" name="usuario">
        <input type="password" placeholder="Ingrese su contraseña" name="contraseña">
        <input class="button" type="submit" value="ingresar">
        
    </form>
</body>
</html>