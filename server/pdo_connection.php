<?php

// Definição de Constantes, caso elas já não estejam definidas
// defined('HOST') ? null : define('HOST', 'localhost');
// defined('DBNAME') ? null : define('DBNAME', 'bootkamp');
// defined('USER') ? null : define('USER', 'root');
// defined('PASSWORD') ? null : define('PASSWORD', '');
// defined('OPTIONS') ? null : define('OPTIONS', []);

try {
    $PDO = new PDO('mysql:host=' . 'localhost' . ';dbname=' . 'bootkamp', 'root', '', []);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $PDO->exec("set names utf8");
} catch (PDOException $e) {
    echo "Erro ao conectar " . $e;
}
