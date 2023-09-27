<?php
include 'conexion_be.php';

if (isset($_POST['correo']) && isset($_POST['tipo_usuario']) && isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $contrasena = $_POST['contrasena'];
// Agrega mensajes de depuración
echo "Contraseña ingresada: " . $contrasena . "<br>";
echo "Contraseña almacenada: " . $row['contrasena'] . "<br>";

    // Usa consultas preparadas para evitar inyección SQL
    $query = "INSERT INTO usuarios12 (correo, tipo_usuario, contrasena) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);

    // Vincula los parámetros
    mysqli_stmt_bind_param($stmt, "sss", $correo, $tipo_usuario, $contrasena);

    // Ejecuta la consulta
    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        // Usuario registrado correctamente
        header("Location:hola_nomas .php");
        exit();
    } else {
        echo "Error al registrar el usuario.";
    }

    mysqli_stmt_close($stmt);
}
?>

