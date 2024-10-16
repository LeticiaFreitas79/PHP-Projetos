<!--Objetivo do Código: Página Inicial da Churrascaria. Mostra o carrosel, produtos em destaque, produtos e contato-->
<!--Status do Código: Em correção; O estilo da página não foi aplicado-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view_css/bootstrap.min.css"> <!--Estilo da página via Bootstrap-->
    <link rel="stylesheet" href="../view_css/estilo.css"> <!--Estilo da página via CSS-->
    <title>Chuleta Quente Churrascaria</title>
</head>

<body class="fundofixo">
    <!--Menu-->
    <?php include 'view_menuPublico.php'; ?>
    <a name="home">&nbsp;</a>
    <main class="container">
        <!--Carousel -->
        <?php include 'view_carousel.php'; ?>
        <!--Destaques-->
        <a class="pt-6" name="destaques">&nbsp;</a>
        <?php include 'view_produtosDestaque.php'; ?>
        <!--Produtos-->
        <a class="pt-6" name="produtos" >&nbsp;</a>
        <?php include 'view_produtosGeral.php'; ?>
        <!--Rodapé-->
        <footer class="panel-footer" style="background: none;">
            <?php include 'view_rodape.php'; ?> 
            <a name="contato"></a>
        </footer>
    </main>
</body>

<!--Bootstrap e JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
<script src="view_js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function()
    {
        $(".regular").slick({
            dots:true,
            infinity:true,
            slidesToShow:3,
            slidesToScroll:3 
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick.min.js"></script>
</html>
