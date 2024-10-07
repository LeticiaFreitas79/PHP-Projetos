<!--Status do Código: em correção-->

<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->

<head>
    <meta charset="UTF-8"> <!--Permite que o navegador interperte corretamente os caracteres da página-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Permite a melhor renderização da página--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Permite que a página seja responsiva-->
    <title>Novo Filme | Locadora</title> <!---Título da Página-->

    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(74, 78, 105);
            padding: 20px;
        }

        div 
        {
            background-color: rgba(242, 233, 228);
            text-align: center;
            position: absolute;
            /*top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%); */
            padding: 40px; /* Distância entre os elementos e a borda da div. */
            border-radius: 25px;
            color: rgba(34, 34, 59); /* Cor do título*/
            /* Linhas 22-23-24-25: Posicionar no centro da página. */
        }

        input
        {
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            width: 300px;
        }

        #btnEnviar 
        {
            background-color: rgba(154, 140, 152);
            border: none;
            border-radius: 10px;
            padding: 15px;
            width: 100%;
            font-size: 15px;
            font-weight: bold;
            color: rgba(251, 248, 246);
        }

        #btnEnviar:hover
        {
            background-color: rgba(74, 78, 105);
            cursor: pointer;
        }
    </style>

</head>
<body>
    <?php
        include("conexao.php"); //Conecta ao Banco de Dados.

        //Declaração de Váriaveis Vazias.
        $filme = "";
        $genero = "";
        $indicacao = "";
        $lancamento = "";
        $duracao = "";
        $diretor = "";
        $produtora = "";
        $valor = ""; 

        if(!empty($_POST['selecionarFilmes'])=="Atualizar")
        {
            $select = "SELECT * FROM contas WHERE id=".$_POST['id'];
            $dadosFilmes = $conn -> query($select);
        }

        if (!empty($dado))
        {
            while ($filme = $dado -> fetch_assoc())
            {
                $vazioFilme = $filme["filme"];
                $vazioGenero = $genero["genero"];
                $vazioIndicacao = $indicacao["indicacao"];
                $vazioLancamento = $lancamento["lancamento"];
                $vazioDuracao = $duracao["duracao"];
                $vazioDiretor = $diretor["diretor"];
                $vazioProdutora = $produtora["produtora"];
                $vazioValor = $valor["valor"];
            }
        }
        
    ?>


    <div> <!--Abre o bloco de conteúdo-->
            <h1>ATUALIZAR FILME</h1>
            <form action="inserir.php" method="POST">
            <input type="text" placeholder="Nome" name="filme" value="<?php echo $filme; ?>">
                <br><br>
                <input type="text" placeholder="Gênero" name="genero" value="<?php echo $genero; ?>">
                <br><br>
                <input type="text" placeholder="Classificação" name="indicacao" value="<?php echo $indicacao; ?>">
                <br><br>
                <input type="text" placeholder="Lançamento" name="lancamento" value="<?php echo $lancamento; ?>">
                <br><br>
                <input type="text" placeholder="Duração" name="duracao" value="<?php echo $duracao; ?>">
                <br><br>
                <input type="text" placeholder="Diretor" name="diretor" value="<?php echo $diretor; ?>">
                <br><br>
                <input type="text" placeholder="Produtora" name="produtora" value="<?php echo $produtora; ?>">
                <br><br>
                <input type="text" placeholder="Valor" name="valor" value="<?php echo $valor; ?>">
                <br><br>    
                <input type="submit" nome="submit" id="btnEnviar" value="Atualizar">
            </form>
        </div> <!--Fecha o bloco de conteúdo-->
    </body>
</html>