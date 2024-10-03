<!--Status do Código: em análise-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicione Novo Livro | Livraria</title>
</head>
<body>
    <!--Exibe campos em branco para inserir as informações sobre os livros-->
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
</body>
</html>