<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_salida = $_POST['fecha_salida'];
    
    echo "<h2>Gracias por realizar su reservación, $nombre.</h2>";
    echo "<h4>Tenemos la la siguiente infrmación:</h4>";
    echo "<h4>nombre: $nombre.</h4>";
    echo "<h4>nit: $nit.</h4>";
    echo "<h4>fecha de nacimiento: $fecha_nacimiento.</h4>";
    echo "<h4>fecha de ingreso: $fecha_ingreso.</h4>";
    echo "<h4>fecha de salida: $fecha_salida.</h4>";
    echo "<p>Hemos recibido su reservación y nos comunicaremos lo antes posible para confirmar la información.</p>";
    
}
?>  