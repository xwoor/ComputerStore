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
$id = $_GET['id'];


// sql to delete a record
$sql = "DELETE FROM `tabla7` WHERE `tabla7`.`id` = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Producto borro correctamente');
            window.location= '../inventario.php'
            </script>";
} else {
    echo "Error borrando los datos: " . $conn->error;
}

$conn->close();
?>