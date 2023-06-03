<?php
include('config.php');
require_once('repository/InstrumentoRepository.php');
require_once('repository/ClienteRepository.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$instrumento = fnLocalizaInstrumentoPorId($id);
$cliente = null;

if (isset($_SESSION['login'])) {
    $idcliente = $_SESSION['login']->idcliente;
    $cliente = fnLocalizaClientePorId($idcliente);
}
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <title>Página do Instrumento</title>
</head>

<body>
    <?php include('navbar.php') ?>
    <main>
        <section>
            <img src="<?= "$instrumento->foto" ?>" class="foto-produto">
            <div class="texto">
                <h4 class="p1">
                    <b> Nome:</b> <?= "$instrumento->nome" ?>
                </h4>
                <p class="p2">
                    <b> Descrição:</b> <?= "$instrumento->descricao" ?>
                </p>
                <p class="p3">
                    <b> Marca:</b> <?= "$instrumento->marca" ?>
                </p>
                <p class="p4">
                    <b> R$ </b> <?= "$instrumento->valor" ?>
                </p>
                <form method="post" action="registrarPedido.php">
                    <input type="hidden" name="valortotal" value="<?= $instrumento->valor ?>">
                    <input type="hidden" name="idproduto" value="<?= $instrumento->idproduto ?>">
                    <input type="hidden" name="idcliente" value="<?= $cliente->idcliente ?? '' ?>">
                    <button class="botao" type="submit">COMPRAR</button>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>