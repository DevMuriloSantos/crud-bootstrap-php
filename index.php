<?php 
include "config.php";
include DBAPI;

$db = open_database(); // abre o conexão com o banco

if ($db) {
    echo '<h1>Banco de Dados Conectado!</h1>';
} else {
    echo '<h1>ERRO: Não foi possível Conectar!</h1>';
}
?>