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
    <title>Inicio</title>
    <link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">

</head>
<body>
    <header>
        <div class="container">
            <p class="logo">CeniLockers!</p>
            <nav>
                <a href="#container">Contactenos</a>
                <a href="../Soporte/index.php">Soporte</a>
                
                <a href="../reportes/index.php">Reportes</a>
                <a href="../cancelacion/cancelacionn.php">Cancelación</a>

                <a href="?cerrar_sesion=1">Cerrar Sesión</a>
                
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1>El mejor servicio y seguridad<br>Para tu locker</h1>
        <button><a href="../mapa/index.php">Reserva ya!</button></a>

    </section>

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>Somos <span class="color-acento">CeniLockers</span></h2>
                <p>Te ofrecemos el mejor servicio 24 horas, cero costos y 100% online en nuestra pagina CeniLockers, registrate y reserva tu locker con solo un click, ahorra tiempo y cuida tus pertenencias. </p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Sobre nosotros</h2>
            <div class="programas">
             
                <div class="carta">
                    <h3>Vision</h3>
                    <p>Ser el líder en soluciones de seguridad para casilleros en universidades e instutuciones educativas, brindando tranquilidad y confianza a la comunidad estudiantil, con tecnología de vanguardia y un enfoque centrado en la protección y comodidad de nuestros usuarios.</p>
                </div>
                <div class="carta">
                    <h3>Mision</h3>
                    <p>Nuestra misión es ofrecer soluciones innovadoras de seguridad para casilleros en universidades, garantizando la protección de pertenencias personales y materiales de valor de los estudiantes y personal académico. Nos comprometemos a proporcionar productos y servicios de alta calidad, enfocados en la confiabilidad, accesibilidad y facilidad de uso, con un equipo comprometido y orientado a satisfacer las necesidades de seguridad de nuestra comunidad universitaria."





</p>
                    
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ 100% online</li>
                <li>✔️ Flexibilidad de horarios</li>
                <li>✔️ Soporte 1:1</li>
                <li>✔️ Asistencia financiera</li>
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>No te has registrado?</h2>
        <button><a href="../Inicios/Registro.html">Registrate!</button>
    </section>

    <footer>
        <div class="container" id="container">
            <p>&copy; CeniLockers 2023</p>
            <br>
            <p>✔️ Correo:LockersCenigraf@soy.sena.edu.co</p>
            <br>
            <p>✔️ Direccion:Cl. 15 #31-42, Bogotá</p>
            <br>
            <p>✔️ Servicio al cliente: 311 295 77 08</p>
            <br>
            <p>✔️ Linea gratuita 018000000-0000</p>

        
                
        </div>
    </footer>
</body>
</html>
