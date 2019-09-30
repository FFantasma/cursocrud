<?php

$servename = "localhost"; //padrão - server local
$username = "root"; //padrão - root
$password = ""; //senha de conexão do bando de dados
$database = "curso_estoque"; //alterar conforme o nome do seu banco de dados
// Create connection
$conexao = mysqli_connect($servename, $username, $password, $database);




/*if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conexao); */

?>