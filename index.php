<?php
include "config.php";
include DBAPI;

try {
    $db = open_database(); // abre o conexão com o banco

    echo '<h1>Banco de Dados Conectado!</h1>';

} catch (Exception $e) {
    echo "<h2>Aconteceu um erro:\n{$e->getMessage()}</h2>";
}

?>