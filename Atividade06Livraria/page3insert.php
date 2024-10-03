<!--Status do Código: em análise-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Livro | Livraria</title>
    <style>
        body
        {
            padding: 20px;
            background: rgb(13, 52, 68);
        }

        .inserir
        {
            /*Cores e Bordas*/
            background: whitesmoke; 
            border-radius: 10px; 
            border: 2px;
            /*Fonte*/
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            /*Alinhamente*/
            position: absolute;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!--Exibe campos em branco para inserir as informações sobre os livros-->
    <div class = inserir>
        <h1>NOVO LIVRO</h1>
        <form action="insert.php" method="POST">
            Nome: <input type="text" name="nome"><br>
            Autor: <input type="text" name="autor"><br>
            Sinopse: <input type="text" name="sinopse"><br>
            Gênero: <input type="text" name="genero"><br>
            Editora: <input type="text" name="editora"><br>
            Ano de Lançamento: <input type="text" name="lancamento"><br>
            Classificação Indicativa: <input type="text" name="classificacao"><br>
            Quantidade em Estoque: <input type="text" name="quantidade_estoque"><br>
            Valor Unitário: <input type="text" name="valor"><br>
            <input type="submit" id="botao" value="Enviar"><!--Cria o botão que envia as informações para a tabela no Banco de Dados--> 
        </form>
    </div>
</body>
</html>