<?php

$para = "contatobootkamp@pandora.com";
$assunto = "Contato pelo site";
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$motivo = $_REQUEST['motivo'];
$msg = $_REQUEST['msg'];

$corpo = "<strong> Mensagem de contato </strong><br><br>";
$corpo .= "<strong> Nome: </strong> $nome";
$corpo .= "<strong> Email: </strong> $email";
$corpo .= "<strong> Motivo: </strong> $motivo";
$corpo .= "<strong> Msg: </strong> $msg";


$header= "From: $email Reply-to: $email";
$header .="Content-type: text.html"; "charset= utf-8";

//echo $nome."<br>";
//echo $email."<br>";
//echo $motivo."<br>";
//echo $message;

@mail($para,$assunto,$corpo,$header);

header("location:index.php?envio=enviado");

?>