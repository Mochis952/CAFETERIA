<?php
include("conexion.php");

if (isset($_POST["entrar"])) {
    if (isset($_POST["No_Cuenta"]) && isset($_POST["Contraseña"])) {
        $no_cuenta = trim($_POST["No_Cuenta"]);
        $contrasena = trim($_POST["Contraseña"]);

        $consulta = "SELECT * FROM usuarios WHERE No_Cuenta = '$no_cuenta' AND Contraseña = '$contrasena'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            // Usuario autenticado, redirigir a la página deseada
            header("Location: articulos.html");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            echo "<p>Error de autenticación. Verifica tus credenciales.</p>";
        }
    } else {
        echo "<p>Error: Campos de formulario faltantes.</p>";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conex);
?>
