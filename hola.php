<?php 
include("conexion.php");
    
if (isset($_POST["registrado"])) {
    if (strlen($_POST["Nombre"]) >= 1 && 
        strlen($_POST["Correo"]) >= 1 && 
        strlen($_POST["Telefono"]) >= 1 && 
        strlen($_POST["No_Cuenta"]) >= 1 && 
        strlen($_POST["Contraseña"]) >= 1) {

        $nombre = trim($_POST["Nombre"]);
        $correo = trim($_POST["Correo"]);
        $telefono = trim($_POST["Telefono"]);
        $no_cuenta = trim($_POST["No_Cuenta"]);
        $contraseña = trim($_POST["Contraseña"]);

        $consulta = "INSERT INTO `usuarios`(`No_Cuenta`, `Nombre`, `Correo`, `Telefono`, `Contraseña`) VALUES ('$no_cuenta','$nombre','$correo','$telefono','$contraseña')";
        
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo "<h3>Registro exitoso</h3>";
            header("Location: index.php");
        } else {
            echo "<h3>Error al registrar</h3>";
        }
    } 
}

