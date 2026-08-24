<?php

include('../config.php');
include(DBAPI);

$customers = null;
$customer = null;

/**
 *  Formatar as datas
 */
function formatData($data, $formato)
{
	$dt = new Datetime($data, new DateTimeZone("America/Sao_Paulo"));// "-0300"
	return $dt->format($formato);
}

/**
 *  Listagem de Clientes
 */
function index()
{
	global $customers;
	$customers = find_all("customers");
	//find_all e find é a mesma coisa, resulta na mesma coisa
}

/**
 *  Visualização de um Cliente
 */
function view($id = null)
{
	global $customer;
	$customer = find('customers', $id);
}
?>