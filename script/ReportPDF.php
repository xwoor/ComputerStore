<?php 
            //Conexion DB
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

            $sql = "SELECT * FROM tabla7";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                require('xampp/htdocs/ComputerStore/reportespdf/fpdf.php');


date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../imagenUNAD/logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'Codigo');
$pdf->Cell(25,20,'Nombre');
$pdf->Cell(30,20,'Marca');
$pdf->Cell(40,20,'Cantidad');
$pdf->Cell(50,20,'Precio');



$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM personas';
$result = mysqli_query($conn,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['Codigo'], 0);

$pdf->Cell(25,20, utf8_decode($reg['nombre']), 0);

$pdf->Cell(30,20, utf8_decode($reg['Marca']), 0);

$pdf->Cell(40,20, utf8_decode($reg['Cantidad']), 0);

$pdf->Cell(50,20, utf8_decode($reg['Cantidad']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($conn);
?>