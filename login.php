<?php
session_start(); // Siempre inicia la sesión en la parte superior del archivo

include 'conexion_be.php';

if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Utiliza sentencias preparadas para prevenir inyección SQL
    $selectQuery = "SELECT * FROM usuarios12 WHERE correo = ?";
    $stmt = mysqli_prepare($conexion, $selectQuery);
    mysqli_stmt_bind_param($stmt, "s", $correo);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verifica la contraseña en texto plano (¡esto no es seguro!)
        if ($contrasena === $row['contrasena']) {
            $_SESSION['correo'] = $correo;
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
    
         // Después de verificar el tipo de usuario
if ($row['tipo_usuario'] === "admin") {
    $_SESSION['acceso'] = "admin";
    header("Location: ventanas.php");
    exit();
} elseif ($row['tipo_usuario'] === "vendedor") {
    $_SESSION['acceso'] = "vendedor";
    header("Location: ventanas.php");
    exit();
} elseif ($row['tipo_usuario'] === "empaque") {
    $_SESSION['acceso'] = "empaque";
    // Mostrar un mensaje de advertencia o redirigir a una página de acceso denegado
    header("Location: acceso_denegado.php");
    exit();
} else {
    echo "Tipo de usuario no válido.";
}

    
 }    


  }
}

?>
