<?php

$servename = "localhost"; //padrão - server local
$database = "curso_estoque"; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexão do bando de dados
// Create connection
$conexao = mysqli_connect($servename, $database, $username, $password);

?>