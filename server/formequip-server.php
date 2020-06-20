<?php

include("pdo_connection.php");

function listar($parametros)
{
    global $PDO;

    $uso = $parametros['Uso'];
    $budget = $parametros['Budget'];

    $sql = "SELECT * FROM produtos WHERE idcategoria = :idcategoria and preco <= :preco";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':idcategoria', $uso);
    $stmt->bindParam(':preco', $budget);
    $res = $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}
