<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('Conexion.php');

    $nombre = $_POST['nombre'];
    $identificacion = $_POST['id_registro'];
    $ficha = $_POST['ficha'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $rol = $_POST['rol'];

    $contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

    if ($nombre == "" || $identificacion == "" || $ficha == "" || $contrasena == "" || $email == "" || $celular == "" || $rol == "" ) {
        echo "<script>alert('Debes completar todos los campos');
        window.location.href = '../Inicios/Registro.html';</script>";
        exit();
    }

    // Validar la extensión del correo electrónico
    $extension = array('@soy.sena.edu.co', '@misena.edu.co');
    $arroa = strstr($email, '@');

    if (!in_array($arroa, $extension)) {
        echo "<script>alert('El correo electrónico debe tener una de las siguientes extensiones: @soy.sena.edu.com o @misena.edu.co');
        window.location.href = '../Inicios/Registro.html';</script>";
        exit();
    }


    $correoExistente = "SELECT * FROM usuarios WHERE correo = '$email'";
    $resultado = mysqli_query($conexion, $correoExistente);
    if (mysqli_num_rows($resultado) > 0) {
        echo "<script>alert('El correo electrónico ya está en uso');
        window.location.href = '../Inicios/Registro.html';</script>";
        exit();
    }


    // Resto del código para insertar los datos en la base de datos
    // Si quiero cambiar la contraseña hash, cambio $contrasena_hasheada  por $contrasena
    // para que no se vea encriptada en la base de datos y tmb en ActuDB.php y Session.php

    $consulta = "INSERT INTO usuarios (nombre, id_usuarios, ficha, contrasena, correo, celular, rol) VALUES ('$nombre', '$identificacion', '$ficha', '$contrasena', '$email', '$celular', '$rol')";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('Usuario registrado exitosamente');
        window.location.href = '../Inicios/InicioSesion.html';</script>";
        exit();
    } else {
        echo "<script>alert('Error al registrar el usuario: " . mysqli_error($conexion) . "');
        window.location.href = '../Inicios/InicioSesion.html';</script>";
        exit();
    }

    mysqli_close($conexion);
}
?>