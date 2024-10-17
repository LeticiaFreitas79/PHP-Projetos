<!--Objetivo do Código: Mostrar as opções de listar e inserir produtos, categorias e usuários-->
<!--Status do Código: Em análise-->

<?php
   include ("../view/view_menuAdm.php");
?>

<main class="container">
<h1 class="breadcrumb">Área Administrativa</h1>
<div class="row"> <!--Manter os elementos na linha-->

<!--Produtos-->
<div class="col-sm-6 col-md-4">
    <div class="thumbnail alert-danger">
        <img src="../view_img/icon_produtos.png" alt=""> <!--Icon-->
        <br> <!--Pular linha-->
        <div class="alert-danger">

        <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group">
                <button class="btn btn-default disabled" role="alert" style="cursor: default;">
                    PRODUTOS
                </button>
            </div>
        </div>
        <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group">
                <a href="controller_produtosListar.php">
                    <button class="btn btn-danger">
                        LISTAR
                   </button>
                </a>
            </div>
                <div class="btn-group">
                    <a href="controller_produtosInserir.php">
                        <button class="btn btn-danger">
                            INSERIR
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Categorias -->
<div class="col-sm-6 col-md-4">
    <div class="thumbnail alert-warning">
        <img src="../view_img/icon_tipos.png" alt="">
        <br>
        <div class="alert-warning">
            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button class="btn btn-default disabled" role="alert" style="cursor: default;">
                        CATEGORIAS
                    </button>
                </div>
            </div>

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <a href="controller_categoriasInserir.php">
                        <button class="btn btn-warning">
                            LISTAR
                        </button>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="controller_categoriasInserir.php">
                        <button class="btn btn-warning">
                            INSERIR
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Usuários-->
<div class="col-sm-6 col-md-4">
    <div class="thumbnail alert-info">
        <img src="../view_img/icon_Usuario.png" alt="">
        <br>
        <div class="alert-info">
            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button class="btn btn-default disabled" role="alert" style="cursor: default;">
                        USUÁRIOS
                    </button>
                </div>
            </div>

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <a href="controller_usuarioListar.php">
                        <button class="btn btn-info">
                            LISTAR
                        </button>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="controller_usuarioInserir.php">
                        <button class="btn btn-info">
                            INSERIR
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main> 