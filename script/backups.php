<?php
date_default_timezone_set("America/Bogota")
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file='"C:\AppServ\www\ComputerStore\backups\"'.$dbname. "-" .date("Y-m-d-H-i-s")."sql";
system("$mysqldump --no-default -u $ ")