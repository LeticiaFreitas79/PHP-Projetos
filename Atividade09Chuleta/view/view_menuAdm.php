<!--Objetivo do Código: Este arquivo deve ser incluído nas páginas de Administração da Churrascaria-->
<!--Status do Código: Em correção; GET não funciona-->


<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <!--Para exibição Mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">
                <img src="../view_img/logo_chuleta.png" alt="Logo Chuleta Quente Churrascaria">
            </a>
        </div>

        <!--Barra de Navegação á Direita-->
        <div class="collapse navbar-collapse" id="defaultNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" class="btn btn-danger navbar-btn disabled" style="cursor: default;">
                        Olá, <?php //echo $_GET['cliente']; ?>!
                    </button>
                </li>
                <li class="active">
                    <a href="index.php">ADM</a>
                </li>
                <li>
                    <a href="produtos_lista.php">PRODUTOS</a>
                </li>
                <li>
                    <a href="tipos_lista.php">CATEGORIAS</a>
                </li>
                <li>
                    <a href="usuarios_lista.php">USUÁRIOS</a>
                </li>
                <li class="active">
                    <a href="../index.php">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="glyphicon glyphicon-log-out"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>