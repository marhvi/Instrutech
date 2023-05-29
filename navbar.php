<header>
    <nav>
        <ul class="nav">
            <li><img src="images/logo.png" alt="logo" id="logo"></li>
            <li><a href="index.php">Instrutech</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="sobrenos.php">Sobre nós</a></li>
            <li class="search-bar">
                <form role="search" method="post" action="localiza-instrumento.php">
                    <input type="text" placeholder="  Pesquisar" class="search">
                    <button type="submit" class="btn-search">Buscar</button>
                </form>
            </li>
            <?php if (empty(isset($_SESSION['login']))) : ?>
            <li><a href="login.php" class="login-btn">Login</a></li>
            <?php else : ?>
            <li><a href="logout.php" class="login-btn">Logout</a></li>
            <?php require_once('repository/ClienteRepository.php');
                $id = $_SESSION['login']->idcliente;
                $cliente = fnLocalizaClientePorId($id);
                ?>
            <li><a href="minhaConta.php?nome=<?= $cliente->nome ?>">Conta</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['login']) && $_SESSION['login']->idcliente = 1) : ?>
            <li style="padding: 0 2px 0 160px;"><a href="listagem-de-clientes.php">Clientes</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<br>