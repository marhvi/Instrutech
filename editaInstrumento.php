<?php

require_once('repository/InstrumentoRepository.php');
require_once('util/base64.php');


$id = filter_input(INPUT_POST, 'idJogo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

$foto = converterBase64($_FILES['foto']);


if (fnUpdateInstrumento(
    $id,
    $foto,
    $nome,
    $descricao,
    $marca,
    $valor,
    $estado,
    $tipo
)) {
    $msg = "Sucesso ao gravar";
} else {
    $msg = "Falha na gravação";
}

$page = "formulario-edita-instrumento.php";
setcookie('notify', $msg, time() + 10, "instrutech/{$page}", 'localhost');
header("location: {$page}");
exit;
