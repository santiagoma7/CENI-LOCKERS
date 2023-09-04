<?php
include('../PHP/Funciones.php');



InicioSesion();
Inactividad(1800);
if (isset($_GET['cerrar_sesion'])) {
    cerrarSesion();
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../cancelacion/cancelacion.css">
    <link rel="stylesheet" href="../cancelacion/notificacion.css">
    <title>cancelacion de reserva</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">CeniLockers!</p>
            <nav>
            <a href="../paginainicio/index.php">Inicio</a>
                <a href="#caracteristicas">Contactenos</a>
                <a href="../Soporte/index.php">Soporte</a>
                <a href="?cerrar_sesion=1">Cerrar Sesión</a>


                
                
            </nav>
        </div>
    </header>
    <section id="hero">
        <h2>TIEMPO RESTANTE DEL LOKER<br>
        este es el tiempo que tienes para utilizar el loker</h2><br><br>
        <div class="container">
          <p id="tiempo">00:00:00</p>
        </div>
    </section>
    <br><br><br>   <br>
    <section id="hero1" >
       
        <form action="../cancelacion/cancelacion.php" method="post" class="contenedor" >
            <h2>CANCELACION</h2>
                <input type="text" name="porque" placeholder="razon de la cancelacion" ><br>
                <input type="number" name="casillero" placeholder="casillero cual se desea cancelar la reserva" ><br>
                <input type="text" name="nom" placeholder="nombre del estudiante"><br>
                <input type="submit" id="cancelar"  value="cancelar reserva">
        </form>
    </section>
    <br><br><br><br>
    <footer>
        <div class="container">
            <p>
                    Linea gratuita 018000000-0000<br><br>
                    Correo:LockersCenigraf@soy.sena.edu.co <br><br>
                    Direccion:Cl. 15 #31-42, Bogotá<br><br>
                    Servicio al cliente: 311 295 77 08<br><br>
                    &copy; CeniLockers!
            </p>
        </div>
    </footer>
    <script src="../cancelacion/notificacion.js"></script>
</body>
</html>
