<?php

require_once('repository/InstrumentoRepository.php');
session_start();

if (fnDeleteInstrumento($_SESSION['id'])) {
    $msg = "Sucesso ao apagar";
} else {
    $msg = "Falha ao apagar";
}

unset($_SESSION['id']);

$page = "catalogo.php";
setcookie('notify', $msg, time() + 10, "/instrutech/{$page}", 'localhost');
header("location: {$page}");
exit;
