<?php

function InicioSesion(){
    session_start();

    if (!isset($_SESSION['username'])) {
            echo "<script>alert('Debe iniciar sesion para ingresar a la página');
            window.location.href = '../Inicios/InicioSesion.html';</script>";
            exit();
    }
}

function Inactividad($TiempoInactivo) {
    if (isset($_SESSION['username']) && isset($_SESSION['TiempoLimite'])) {
        $Tiempo = time() - $_SESSION['TiempoLimite'];

        if ($Tiempo > $TiempoInactivo){
            session_unset();
            session_destroy();
            echo "<script>alert('Tu sesión ha expirado por inactividad.');
                  window.location.href = '../Inicios/InicioSesion.html';</script>";
            exit();
        }
    } elseif (isset($_SESSION['username'])) {
        $_SESSION['TiempoLimite'] = time();
    }
}

function cerrarSesion() {
    session_unset();
    session_destroy();
    header("Location: ../Inicios/InicioSesion.html");
    
    exit();
}

function Administrador() {
    session_start();
    if ($_SESSION['rol'] != "Administrador") {
        echo "<script>alert('Solo pueden entrar Administradores');
        window.location.href = '../Inicios/InicioSesion.html';</script>";
        exit();
    }
}



?>