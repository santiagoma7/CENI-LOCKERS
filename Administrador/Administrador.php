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
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>

<header>
        <div class="container">
            <p class="logo">CeniLockers!</p>
            <nav>
                <a href="../paginainicio/index.php">Inicio</a> 
                <a href="?cerrar_sesion=1">Cerrar Sesión</a> 
            </nav>
        </div>
</header>

<div class="container">
    <?php
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<br>";
        echo "<h2>Lista de Usuarios</h2>";
        echo "<br>";
        echo "<table class='table table-hover'>";
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Ficha</th>";
        echo "<th>Contraseña</th>";
        echo "<th>Correo</th>";
        echo "<th>Rol</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id_usuarios'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['ficha'] . "</td>";
            echo "<td>" . $fila['contrasena'] . "</td>";
            echo "<td>" . $fila['correo'] . "</td>";
            echo "<td>" . $fila['rol'] . "</td>";
            echo "<td>
                    <a href='Actualizar.php?id=" . $fila['id_usuarios'] . "' class='btn btn-primary btn-sm'>Actualizar</a>
                    <a href='Eliminar.php?id=" . $fila['id_usuarios'] . "' class='btn btn-danger btn-sm ml-2' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este usuario?')\">Eliminar</a>
                </td>";
        echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        
    } else {
        echo "No se encontraron usuarios.";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
