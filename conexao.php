<?php
$username = 'guime77'; 
$password = 'guiferreira'; 
$host = "db4free.net:3306"; 
$dbname = 'banco77'; 
   
$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
