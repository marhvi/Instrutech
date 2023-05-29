<?php include('config.php') ?>
<!DOCTYPE html>
<php lang="pt_br">

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
        <link href="css/carousel.css" rel="stylesheet">


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <title>Instrutech</title>
    </head>

    <body>
        <?php include('navbar.php'); ?>
        <h3>Instrutech</h3>
        <br>
        <main>
            <!--Comeco do Carrossel-->
            <div class="carousel">
                <img src="images/logo.png" alt="Image 1" title="Image 1">
                <img src="images/banner1.jpeg" alt="Image 2" title="Image 2">
                <img src="images/banner2.jpg" alt="Image 3" title="Image 3">
                <img src="images/banner3.jpg" alt="Image 4" title="Image 3">
            </div>
            <!--Fim do Carrossel-->

            <script type="text/javascript" src="js/carousel.js"></script>

            <section>
                <div class="row" style="margin: 3% 0;">
                    <hr>
                    <h3 style="margin-bottom: 3%;">Instrumentos Recém Adquiridos</h3>
                    <hr>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn.pixabay.com/photo/2017/03/16/00/08/piano-2147856_640.png"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Título especial</h5>
                                <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um
                                    conteúdo
                                    adicional.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Triangel_%28Instrument%29.png/200px-Triangel_%28Instrument%29.png"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Título especial</h5>
                                <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um
                                    conteúdo
                                    adicional.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn.pixabay.com/photo/2016/09/26/19/21/drums-1696802_640.png"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Título especial</h5>
                                <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um
                                    conteúdo
                                    adicional.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn.pixabay.com/photo/2016/09/26/19/21/drums-1696802_640.png"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Título especial</h5>
                                <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um
                                    conteúdo
                                    adicional.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </body>

</php>