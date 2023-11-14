<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <section>
            <img class="logo" src="img/logo.jpg" width="830">
        </section>
    </header>
    <article>
        <br>
        <section class="exitosa">
            <h1>Login</h1>
            <img class="porto" src="img/uamex.jpg" width="200">
            <p>Bienvenido a la Cafeteria</p>
            <form action="procesar_login.php" method="post">
                <img src="img/usuario.png" width="70" alt="Icono de usuario">
                <input type="text" id="usuario" name="No_Cuenta" placeholder="Numero de Cuenta" >
                <br>
                <img src="img/contraseña.png" width="70" alt="Icono de contraseña">
                <input type="password" id="contraseña" name="Contraseña" placeholder="Contraseña">
                <br><br><br>
                <input type="submit" name="entrar">
            </form>
            <br><br>
            <a href="registro.php">Regístrate aquí</a>
        </section>
    </article>
</body>
</html>

