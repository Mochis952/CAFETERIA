<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        include("conexion.php");
    ?>
    <header>
        <section>
            <img class="logo" src="img/logo.jpg" width="830">
        </section>
        <form action="hola.php" method="post">
            <article class="exitosa">
                <h1>REGISTRO</h1>
                <h2>Nombre:</h2>
                <input type="text" id="nombre" name="Nombre" placeholder="Nombre" >
                <h2>Correo electrónico:</h2>
                <input type="email" id="Correo" name="Correo" placeholder="Correo" >
                <h2>Teléfono:</h2>
                <input type="number" id="Telefono" name="Telefono" placeholder="Telefono" >
                <h2>Número de cuenta:</h2>
                <input type="number" id="No_Cuenta" name="No_Cuenta" placeholder="No_Cuenta" >
                <h2>Contraseña:</h2>
                <input type="text" id="contraseña" name="Contraseña" placeholder="Contraseña" >
                <input type="submit" name="registrado" value="Registrarse">
            </article>
        </form>
    </header>
</body>
</html>
