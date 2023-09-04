<?php
include('Conexion.php');

session_start();

$Id = $_POST['id_login'];
$Contrasena = $_POST['contrasena'];

$consulta = "SELECT id_usuarios, contrasena, nombre, rol FROM usuarios WHERE id_usuarios = '$Id'";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_array($resultado);

//Para cambiar la contraseña hasheada quitar password_verify asi: if ($usuario && ($Contrasena == $usuario['contrasena'])) {
//Para poner contraseña hash = 

    if ($usuario && ($Contrasena == $usuario['contrasena'])) {
    $_SESSION['username'] = $usuario['nombre'];
    $_SESSION['id'] = $usuario['id_usuarios'];
    $_SESSION['rol'] = $usuario['rol'];

    if ($usuario['rol'] == "Administrador") {
        header("Location: ../Administrador/Administrador.php");
    }else {
        header("Location: ../paginainicio/index.php");
        
    }
    exit();
} else {
    echo "<script>alert('Datos incorrectos');
    window.location.href = '../Inicios/InicioSesion.html';</script>";
}

?>