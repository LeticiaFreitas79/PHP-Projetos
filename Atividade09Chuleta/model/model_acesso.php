<!--Objetivo do Código: -->
<!--Status do Código: Concluído/em teste-->

<?php
    session_name('session_chuleta');
    if (!isset($_SESSION)) {
        session_start();
    }

    //Verifica se o usuário está logado na sessão.
    if(!isset($_SESSION['login_usuario'])){
        //Se não existir, a sessão é redirecionada por segurança.
        header('location: controller_login.php'); //Redirecioamento.
        exit;
    } 
    $nome_sessao = session_name();
    if(!isset($_SESSION['nome_sessao']) 
        or ($_SESSION['nome_sessao']!=$nome_sessao)){
            session_destroy();
            header('location:controller_login.php');
    }
?>