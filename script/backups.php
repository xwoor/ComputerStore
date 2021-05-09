<<?php
date_default_timezone_set("America/Bogota")
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

$mysqldump='"C:\xampp\mysql\bin\mysqldump.exe"';
$backup_file='"C:\xampp\htdcos\ComputerStore\backups\"'.$dbname. "-" .date("Y-m-d-H-i-s")."sql";
system("$mysqldump --no-default -u $username -p$password $dbname > $backups ");

?>

