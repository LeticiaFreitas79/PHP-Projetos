<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <p>Bem Vindo!</p>
    <p>Preencha os campos abaixo para inserir um produto.</p>
    Produto: <input type="text" name="produto"><br>
    Valor: <input type="text" name="valor"><br>
    <input type="submit" value="Inserir Produto">

    <?php
        $produtos = '<table border="1">'; //Para abrir a tabela.
        $produtos = '<thead>'; //Para abrir o cabeçalho.
        $produtos = '<tr>'; //Para abrir uma linha.
        $produtos = '<th>Produto<th>'; //Coluna 'produto' do cabeçalho.
        $produtos = '<th>Valor<th>'; //Coluna 'valor' do cabeçalho.
        $produtos = '</tr>'; //Fecha a linha.
        $produtos = '</thead>'; //Fecha o cabeçalho.
        $produtos = '<tbody>'; //Abre o corpo da tabela.
    ?>


</body>
</html>