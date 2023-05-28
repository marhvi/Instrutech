<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Página
        do Instrumento</title>
</head>

<body>
    <?php include('navbar.php') ?>
    <main>
        <section>
            <div class="col-6 offset-3">
                <fieldset>
                    <legend>Cadastro de Cliente</legend>
                    <form action="registraCliente.php" method="post" class="form" enctype="multipart/form-data">
                        <div class="mb-3 form-group">
                            <label for="nomeId" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome completo">
                            <div id="helperNome" class="form-text">Informe o nome completo</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="emailId" class="form-label">Email</label>
                            <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o email">
                            <div id="helperEmail" class="form-text">Informe o email</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="senhaId" class="form-label">Senha</label>
                            <input type="password" name="senha" id="senhaId" class="form-control" placeholder="Informe a senha">
                            <div id="helperSenha" class="form-text">Informe a senha</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="cepId" class="form-label">CEP</label>
                            <input type="text" name="cep" id="cepId" class="form-control" placeholder="Informe o CEP">
                            <div id="helperCep" class="form-text">Informe o CEP</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="enderecoId" class="form-label">Endereço</label>
                            <input type="text" name="endereco" id="enderecoId" class="form-control" placeholder="Informe o endereço">
                            <div id="helperEndereco" class="form-text">Informe o endereço</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="numId" class="form-label">Número</label>
                            <input type="text" name="num" id="numId" class="form-control" placeholder="Informe o número">
                            <div id="helperNum" class="form-text">Informe o número</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="bairroId" class="form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairroId" class="form-control" placeholder="Informe o bairro">
                            <div id="helperBairro" class="form-text">Informe o bairro</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="cidadeId" class="form-label">Cidade</label>
                            <input type="text" name="cidade" id="cidadeId" class="form-control" placeholder="Informe a cidade">
                            <div id="helperCidade" class="form-text">Informe a cidade</div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="estadoId" class="form-label">Estado</label>
                            <input type="text" name="estado" id="estadoId" class="form-control" placeholder="Informe o estado">
                            <div id="helperEstado" class="form-text">Informe o estado</div>
                        </div>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                        <div id="notify" class="form-text text-capitalize fs-4">
                            <?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
                    </form>
                </fieldset>
            </div>

        </section>
    </main>
    <?php include('footer.php') ?>
</body>

</html>