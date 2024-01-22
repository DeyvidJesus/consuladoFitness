<?php
// Dados do banco de dados e do servidor
$host = "fdb1032.awardspace.net";
$username = "4401063_consuladofitness";
$password = "Consul@dofit15";
$database = "4401063_consuladofitness";

$conn = mysqli_connect($host, $username, $password, $database);

// Verificação se houve falha na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>