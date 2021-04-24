<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Fallo la conexion: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE dbunad7";
if ($conn->query($sql) === TRUE) {
  echo "<script>
            alert('La base de datos se creo correctamente');
            window.location= '../index.php'
        </script>";
} else {
  echo "<script>
            alert('Error al crear la base de datos o ya existe');
            window.location= '../index.php'
        </script>" . $conn->error;
}

$conn->close();
?>