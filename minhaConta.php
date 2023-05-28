<?php
include('config.php');
require_once('repository/ClienteRepository.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$cliente = fnLocalizaClientePorId($id);
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <title>Página do Instrumento</title>
</head>

<body>
    <?php include('navbar.php') ?>
    <main>
        <section>
            <h3>Minha Conta</h3>

            <div class="my-account-container">
                <h4>Meus Dados</h4>

                <p><?= "$cliente->nome" ?></p>
                <p><?= "$cliente->email" ?></p>
                <p><?= "$cliente->senha" ?></p>
                <p><?= "$cliente->estado" ?></p>
                <p><?= "$cliente->bairro" ?></p>
                <p><?= "$cliente->cidade" ?></p>
                <p><?= "$cliente->endereco" ?></p>
                <p><?= "$cliente->num" ?></p>
                <p><?= "$cliente->cep" ?></p>
            </div>

            <div class="my-deals-container">
                <h4>Meu histórico</h4>
                <p>Compra</p>
                <p>Aluguel</p>
            </div>
        </section>
    </main>
    <?php include('footer.php') ?>
</body>

</html>