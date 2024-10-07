<!--Status do Código: em desenvolvimento-->
<?php
    //Função 'delete' que exclui dados da tabela com base em seu ID.
    if(!empty($_POST['id'])) //Se o campo 'ID' for diferente de vazio, então os comandos abaixo serão executados. 
    {
        $delete = "DELETE FROM produtos WHERE id = ".$_POST['id']; //Puxa o a função do Banco de Dados através de um comando MySQL.
         $conn -> query($delete); //Realiza a consulta no Banco de Dados.
    }
?>/