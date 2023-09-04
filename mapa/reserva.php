
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include_once('conexion.php');

$lockerSelec=$_POST['locker'];


if ($lockerSelec == "") {
    echo "<script>alert('Debes seleccionar un casillero');
    window.location.href = '../mapa/index.php';</script>";
    exit();
}
$consulta = "INSERT INTO lockers (id_locker) VALUES ('$lockerSelec')";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('Reserva realizada');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error al reservar: " . mysqli_error($conexion) . "');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}

?>