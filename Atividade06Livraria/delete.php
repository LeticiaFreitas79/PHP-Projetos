<!--Status do Código: em desenvolvimento-->

<?php
    include('page1connection.php')

    $delete = "DELETE FROM produtos WHERE id = 'item de reconhecimento'";
    $retorno = $connection->exec($delete);
    header('Location: delete.php');
?>