<?php
include('Conexion.php');

$Id = $_POST['id_login'];
$Contrasena = $_POST['contrasena'];


$consulta = "SELECT * FROM login WHERE id_login = '$Id' AND contrasena = '$Contrasena'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

$consulta2 = "SELECT * FROM login WHERE id_login = '$Id' AND contrasena = '$Contrasena' AND rol = 'Administrador'";
$resultado2 = mysqli_query($conexion, $consulta2);

$filas2 = mysqli_num_rows($resultado2);

if ($filas2){
    echo "<script>alert('Bienvenido al sistema Administrador');
    window.location.href = '../Soporte/index.html';</script>";
}else if ($filas){
    echo "<script>alert('Bienvenido al sistema');
    window.location.href = '../Soporte/index.html';</script>";
}else if($Id == "" || $Contrasena == "") {
    echo "<script>alert('Debes completar ambos campos');
    window.location.href = '../Inicios/InicioSesion.html';</script>";
} else{
    echo "<script>alert('Error en los datos ingresados');
    window.location.href = '../Inicios/InicioSesion.html';</script>";    
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>

