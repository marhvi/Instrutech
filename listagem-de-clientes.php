<?php
include('config.php');
require_once('repository/ClienteRepository.php');
require_once('repository/LoginRepository.php');

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">

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

    <title>Página de Clientes</title>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data cadastro</th>
                    <th colspan="2">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (fnLocalizaClientePorNome($nome) as $cliente) : ?>
                <tr>
                    <td style="background-color: white;"><?= $cliente->idcliente ?></td>
                    <td style="background-color: white;"><?= $cliente->nome ?></td>
                    <td style="background-color: white;"><?= $cliente->email ?></td>
                    <td style="background-color: white;"><?= $cliente->created_at ?></td>
                    <td style="background-color: white;"><a href="#"
                            onclick="gerirUsuario(<?= $cliente->idcliente ?>, 'edit');">Editar</a></td>
                    <td style="background-color: white;"><a href="#"
                            onclick="return confirm('Deseja realmente excluir?') ? gerirUsuario(<?= $cliente->idcliente ?>, 'del') : '';">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if (isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="7"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    <div>
        <button type="submit" class="btn btn-dark"><a style="color: white; text-decoration: none;"
                href="formulario-cadastro-cliente.php">Cadastrar Novo
                Cliente</a></button>
    </div>
    <script>
    window.post = (data) => {
        return fetch(
                'set-session.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }
            )
            .then(response => {
                console.log(`Requisição completa! Resposta:`, response);
            });
    }

    function gerirUsuario(id, action) {

        post({
            data: id
        });

        url = 'excluirCliente.php';
        if (action === 'edit')
            url = 'formulario-edita-cliente.php';
        window.location.href = url;
    }
    </script>
</body>

</html>