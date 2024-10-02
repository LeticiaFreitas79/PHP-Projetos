<!--Status do Código: em análise-->

<?php
    include('connection.php')

    $delete = "DELETE FROM produtos WHERE id = '$getemail'";
    $retorno = $conexao->exec($delete);
    header('Location: select.php');
?>