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
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%);
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

        button 
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

        button:hover
        {
            background-color: rgba(74, 78, 105);
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div> <!--Abre o bloco de conteúdo-->
        <h1>NOVO FILME</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="text" placeholder="Gênero">
        <br><br>
        <input type="text" placeholder="Classificação">
        <br><br>
        <input type="text" placeholder="Lançamento">
        <br><br>
        <input type="datetime" placeholder="Duração">
        <br><br>
        <input type="text" placeholder="Diretor">
        <br><br>
        <input type="text" placeholder="Produtora">
        <br><br>
        <input type="text" placeholder="Valor">
        <br><br>
        <button>Adicionar</button>
    </div> <!--Fecha o bloco de conteúdo-->
</body>
</html>