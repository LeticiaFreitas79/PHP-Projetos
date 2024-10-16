<!--Objetivo do Código: Esta página deve ser aberta quando o Login for efetuado com sucesso.-->
<!--Status do Código: Em correção; o nome do cliente não está sendo puxado pelo GET-->

<?php 
   include "../model/model_acesso.php";
?>

<h2>
    <strong>
        <?php
            echo $_GET['cliente'];
        ?>
    </strong>, 
    Seja bem vindo em sua área de cliente! 
</h2>

<a href="../controller/controller_logout.php">
    <span class="glyphicon glyphicon-log-out">Sair</span>
</a>
