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

$sql = "CREATE TABLE tabla7 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(30),
    nombre VARCHAR(30),
    marca VARCHAR(50),
    cantidad VARCHAR(50),
    precio VARCHAR(50)
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>
                alert('La tabla ha sido creada correctamente');
                window.location= '../index.php'
            </script>";
    } else {
      echo "<script>
                alert('Error al crear la tabla o ya existe');
                window.location= '../index.php'
            </script>" . $conn->error;
    }
    
    $conn->close();
?>