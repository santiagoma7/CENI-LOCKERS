<?php
include('../PHP/Conexion.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idUsuario = $_GET['id'];

    $eliminarQuery = "DELETE FROM usuarios WHERE id_usuarios = '$idUsuario'";

    if (mysqli_query($conexion, $eliminarQuery)) {
        echo "<script>alert('Usuario eliminado exitosamente');
            window.location.href = 'Administrador.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar el usuario');
            window.location.href = 'Administrador.php';</script>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "<p>ID de usuario no proporcionado.</p>";
}
?>