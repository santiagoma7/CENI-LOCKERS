<?php
include('../PHP/Conexion.php');
include('../PHP/Funciones.php');

Administrador();    
Inactividad(1800);
if (isset($_GET['cerrar_sesion'])) {
    cerrarSesion();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header>
    <div class="container">
        <p class="logo">CeniLockers! x Admin</p>
        <nav>
            <a href="Administrador.php">Lista</a>
            <a href="../Soporte/index.php">Inicio</a>
            <a href="?cerrar_sesion=1">Cerrar Sesión</a>
        </nav>

    </div>
</header>

<?php
include('../PHP/Conexion.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idUsuario = $_GET['id'];

    $consulta = "SELECT * FROM usuarios WHERE id_usuarios = '$idUsuario'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
?>

<form class="formulario" action="ActuDB.php" method="post">
    <h1>Actualizar Usuario</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" name="nombre" placeholder="Nombre Completo" value="<?php echo $fila['nombre']; ?>">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-id-card icon"></i>
            <input class="disabled-field" type="text" name="id_registro" placeholder="Numero de Identificación" value="<?php echo $fila['id_usuarios']; ?> " disabled style="color: #EF5350;">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-graduation-cap icon"></i>
            <input type="text" name="ficha" placeholder="Ficha" value="<?php echo $fila['ficha']; ?>">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user-secret icon"></i>
            <input type="password" name="contrasena" placeholder="Contraseña">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" id="email" name="email" placeholder="Correo Electronico" value="<?php echo $fila['correo']; ?>">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user-cog icon"></i>
            <select type="text" id="rol" name="rol">
                <option id="a" value="">Seleccionar</option>
                <option value="Estudiante" <?php if ($fila['rol'] == "Estudiante") echo "selected"; ?>>Estudiante</option>
                <option value="Administrador" <?php if ($fila['rol'] == "Administrador") echo "selected"; ?>>Administrador</option>
            </select>
        </div>

        <input type="hidden" name="id_usuario" value="<?php echo $idUsuario; ?>">
        <input type="submit" value="Actualizar" class="button">
    </div>
</form>

<?php
    } else {
        echo "<p>No se encontraron datos para el usuario.</p>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
} else {
    echo "<p>ID de usuario no proporcionado.</p>";
}
?>
</body>
</html>