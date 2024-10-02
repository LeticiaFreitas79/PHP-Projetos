<?php
    include('connection.php')

    $delete = "DELETE FROM produtos WHERE id = 1";
    $retorno = $conexao->exec($delete);
    header('Location: select.php');
?>