<!--Objetivo do Código: Está página deve mostrar as opções administrativas do usuário especifico após o login-->
<!--Status do Código: Concluído-->

<?php 
   include "../model/model_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view_css/bootstrap.min.css">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <title>Área Administrativa | Chuleta Quente</title>
</head>
<body>
    <?php include 'view_menuAdm.php'; ?>
    <?php include 'view_opcoesAdm.php'; ?>
</body>
</html>