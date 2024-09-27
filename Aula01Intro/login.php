<?php
    $email = "lele@gmail.com"; //Atribuição á váriavel.
    $senha = 777; //Atribuição à Váriavel.

    if ($_POST["email"] == $email and $_POST["senha"] == $senha) {
        header("location: welcome.php");
    }
    else {
        echo "<script>alert('Email ou senha incorretos. Tente novamente.');</script>";
    }

    //Puxa as informações inseridas nos campos de 'email' e 'senha' e as exibe na página de login.
        // $email = $_POST["email"];
        // echo $email; //Mostra o email inserido no campo 'email' na página login.
        // echo "<br>"; //Pula linha.
        // echo $_POST ["senha"]; //Mostra a senha inserida no campo 'senha' na página de login.

  


?>