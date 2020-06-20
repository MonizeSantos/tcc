<?php
//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$senha = "";
$db_name = "bootkamp";

$connect = mysqli_connect($servername, $username, $senha, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexão: ".mysqli_connect_error();
endif;