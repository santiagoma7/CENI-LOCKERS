<?php
include('../PHP/Conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUsuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $ficha = $_POST['ficha'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];

    if (!empty($contrasena)) {

        //Para cambiar la contraseña hasheada cambiar contrasenaHash por $contrasena

        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);
        $updateQuery = "UPDATE usuarios SET nombre='$nombre', ficha='$ficha', contrasena='$contrasena', correo='$email', rol='$rol' WHERE id_usuarios='$idUsuario'";
    } else {
        
        $updateQuery = "UPDATE usuarios SET nombre='$nombre', ficha='$ficha', correo='$email', rol='$rol' WHERE id_usuarios='$idUsuario'";
    }

    if (mysqli_query($conexion, $updateQuery)) {
        echo "<script>alert('Actualizacion de datos exitosa');
    window.location.href = 'Administrador.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar los datos');
        window.location.href = 'Administrador.php';</script>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "Acceso no válido.";
}
?>