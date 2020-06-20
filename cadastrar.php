<?php

//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$senha = "";
$db_name = "bootkamp";
$conexao = mysqli_connect($servername, $username, $senha,$db_name) or die(mysqli_error());
mysqli_select_db($db_name) or die(mysqli_error());

?>

<?php
$nome= $_POST['nome'];
$idcadastro= $_POST['idcadastro'];
$datanascimento= $_POST['datanascimento'];
$cpf= $_POST['cpf'];
$telefone= $_POST['telefone'];
$email= $_POST['email'];
$cep= $_POST['cep'];
$estado= $_POST['estado'];
$senha= $_POST['senha'];
$confirmarsenha= $_POST['confirmarsenha'];
$sql= mysqli_query("INSERT INTO cadastros(nome, idcadastro, datanascimento, cpf, telefone, email, cep, estado, senha,confirmar senha) VALUES('$nome','$idcadastro,'$datanascimento','$cpf','$telefone','$email','$cep','$estado','$senha','$confirmarsenha')");

?>