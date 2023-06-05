<?php
require_once('repository/ClienteRepository.php');

session_start();

$id = filter_input(INPUT_POST, 'idCliente', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
$privilegio = filter_input(INPUT_POST, 'privilegio', FILTER_SANITIZE_SPECIAL_CHARS);


$id = $_SESSION['cliente']->idcliente;

if (fnUpdateCliente($id, $nome, $cep, $endereco, $num, $bairro, $cidade, $estado, $email, $privilegio)) {
    $msg = "Sucesso ao gravar";
} else {
    $msg = "Falha na gravação";
}

$page = "formulario-edita-cliente.php";
setcookie('notify', $msg, time() + 10, "instrutech/{$page}", 'localhost');
header("location: {$page}");
exit;
