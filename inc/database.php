<?php

$mysqli = new mysqli_driver();
$mysqli->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
//report_mode -> é um atributo;

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $conn->set_charset("utf8"); // metodo;
		return $conn;
	} catch (Exception $e) {
		throw new Exception("Erro ao conectar no banco de dados\n {$e->getMessage()}");
	}
}

function close_database($conn) {
	try {
		$conn->close();
	} catch (Exception $e) {
		throw new Exception("Erro ao encerrar conexão com o banco de dados\n {$e->getMessage()}");
	}
}