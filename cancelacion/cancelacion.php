
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include_once('conexion.php');

$porque=$_POST['porque'];
$casillero=$_POST['casillero'];
$nomestu=$_POST['nom']; 

if ($porque == "" || $casillero == "" || $nomestu == "") {
    echo "<script>alert('Debes tener los campos completados');
    window.location.href = '../cancelacion/cancelacionn.php';</script>";
    exit();
}
$consulta = "INSERT INTO cancelacion (razon,nombreest,numeroloker) VALUES ('$porque', '$nomestu', '$casillero')";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('cancelacion realizada');
        window.location.href = '../cancelacion/cancelacionn.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error al cancelar: " . mysqli_error($conexion) . "');
        window.location.href = '../cancelacion/cancelacionn.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}

?>