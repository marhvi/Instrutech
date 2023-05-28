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
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
                $cliente = fnLocalizaClientePorId($id);
                ?>
                <li><a href="minhaConta.php?id=<?= '$cliente->idcliente' ?>"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="perfil" id="avatar"></a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<br>