<?php
include('config.php');
require_once('repository/InstrumentoRepository.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$instrumento = fnLocalizaInstrumentoPorId($id);
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
                <p class="p1">
                    <?= "$instrumento->nome" ?>
                </p>
                <p class="p2">
                    <?= "$instrumento->descricao" ?></p>
                <p class="p3">
                    <?= "$instrumento->valor" ?>
                </p>
                <button class="botao">COMPRAR</button>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>