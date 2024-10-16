<!--Objetivo do Código: Exibir o menu superior nas Páginas Principais-->
<!--Status do Código: Concluído e Comentado-->

<?php
   include ("../model/model_connect.php"); //Conecta com o Banco de Dados.
?>

    <!-- BOOTSTRAP -->

    <!--Abre a barra de navegação-->  
    <nav class="navbar navbar-expanded-md navbar-fixed-top navbar-light navbar-inverse">
        <div class="container-fluid">

            <!--Agrupamento Mobile-->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                   <span class="sr-only">Toggle Navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>  
                </button>
                <a href="index.php" class="navbar-brand">
                    <img src="../view_img/logo_chuleta.png" alt="Logotipo Chuleta Quente">
                </a>
            </div>

            <!--Barra de Navegação á Direita-->
            <div class="collapse navbar-collapse" id="menupublico">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li>
                    <li><a href="index.php#destaques">DESTAQUES</a></li>
                    <li><a href="index.php#produtos">PRODUTOS</a></li>

                    <!-- Dropdown de Categorias-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            CATEGORIAS
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                                foreach($rows_tipos as $row)
                                {
                            ?> 
                                <li>
                                    <a href="view_produtosCategoria.php?id_tipo=<?php echo $row[0].'&rotulo='.$row[2] ?>"> <?php echo $row[2] ?></a>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </li>

                    <li><a href="index.php#contato">CONTATO</a></li>

                    <!-- Formulário de busca -->
                    <form action="view_produtosBusca.php" method="get" name="form-busca" 
                    id="form-busca" class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="search" name="buscar" id="buscar" size="9" class="form-control"
                            aria-label="search" placeholder="Buscar produto" required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>        

                    <li class="active">
                        <a href="view/index.php">
                            <span class="glyphicon glyphicon-user">&nbsp;ADMIN/CLIENTE</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>