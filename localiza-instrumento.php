<?php
require_once('repository/InstrumentoRepository.php');
$nome = filter_input(INPUT_POST, 'nomeJogo', FILTER_SANITIZE_SPECIAL_CHARS);

header("location: catalogo.php?nome={$nome}");
exit;
