<?php
function conectBD(){
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "fiftyhards";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
return $conn;
}
?>