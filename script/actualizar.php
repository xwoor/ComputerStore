<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Fallo la conexion: " . $conn->connect_error);
}
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];


$sql = "UPDATE `tabla7` SET `codigo` = '$codigo', `nombre` = '$nombre', `marca` = '$marca', `cantidad` = '$cantidad', `precio` = '$precio' WHERE `tabla7`.`id` = $id";


if ($conn->query($sql) === TRUE) {
  echo "<script>
        alert('Producto actualizado correctamente');
        window.location= '../inventario.php'
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>