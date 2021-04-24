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
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];


$sql = "INSERT INTO `tabla7` (`id`, `codigo`, `nombre`, `marca`, `cantidad`, `precio`) 
VALUES (NULL, '$codigo', '$nombre', '$marca', '$cantidad', '$precio')";


if ($conn->query($sql) === TRUE) {
  echo "<script>
        alert('Producto agregado correctamente');
        window.location= '../inventario.php'
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>