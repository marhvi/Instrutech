<?php
include('config.php');
require_once('repository/InstrumentoRepository.php');

$instrumentos = fnListInstrumentos();

?>

<!doctype html>
<html lang="pt_BR">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <title>Lista de Instrumentos</title>
</head>

<body>
    <?php include('navbar.php'); ?>
    <main>
        <section>
            <div class="container">
                <h1>Lista de Instrumentos</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($instrumentos as $instrumento) : ?>
                        <tr>
                            <td><?= $instrumento->idproduto ?></td>
                            <td><?= $instrumento->nome ?></td>
                            <td><?= $instrumento->valor ?></td>
                            <td>
                                <a href="formulario-edita-instrumento.php?id=<?= $instrumento->idproduto ?>"
                                    class="btn btn-primary">Editar</a>
                                <a href="excluirInstrumento.php?id=<?= $instrumento->idproduto ?>"
                                    onclick="return confirm('Deseja realmente excluir?' ? gerirUsuario(<?= $instrumento->idproduto ?>, 'del') : '')"
                                    class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <div>
                            <button type="submit" class="btn btn-dark"><a
                                    style="color: white; text-decoration: none; margin: 0 auto;"
                                    href="formulario-cadastro-instrumento.php">Cadastrar Novo
                                    Instrumento</a></button>
                        </div>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
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
                // template string
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

        // redirect do javacript
        window.location.href = url;
    }
    </script>
</body>

</html>