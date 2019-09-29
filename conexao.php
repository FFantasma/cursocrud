<?php

$servename = "127.0.0.1"; //padrão - server local
$database = "curso_estoque"; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexão do bando de dados
// Create connection
$conexao = mysqli_connect($servename, $database, $username, $password);




/*if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conexao); */

?>