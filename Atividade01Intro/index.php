<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução a PHP</title>
</head>
<body>


<?php  
    echo "PHP | Aula01 - Introdução a Linguagem.";
    echo "<br>"; //Comando HTML usado dentro do bloco PHP.
    echo "Olá Mundo!";
    echo "<br>"; //Pula para a linha de baixo, evitando que os textos fiquem todos na mesma linha.
    
    $x = 10; //Atribuição de valor a variavel. Não existe um comando para declarar a váriavel, apenas se atribui o valor diretamnete.
    echo $x; //Mostra o valor atribuido na váriavel.
    echo "<br>"; //Pula linha.
    echo "-----------------------------"; //Separa os elementos para a página ficar esteticamente agradavél.
?>

<br> 

<?php
    echo $x; //Atribuindo valor a váriavel.
    echo "<br>"; //Pula linha.
    $x = "15"; //Atribuição de valor a variavél.
    var_dump($x); //?
    echo "<br>"; //Pula linha.
    var_dump(["Letícia","Freitas", 2003]); //Ao abrir chaves dessa forma, se cria e identifica um vetor.
    echo $dados[0]; //Mostra os dados do vetor.

    echo "<br>"; //Pula linha.
    $info = array("Leticia","Freitas", 2003); //Adiciona informações ao vetor.
    echo $info[0]; //Mostra as informações inseridas no vetor.

    define("nome","Leticia Silva de Freitas "); //
    echo nome; //Mostra apenas o campo nome.
    echo "<br>"; //Pula linha.
    
    const sobrenome = "Silva"; //Constante.
    echo sobrenome; //Mostra apenas o campo sobrenome.
    echo "<br>"; //Pula linha.


    $valor = 20; //Atribuição de valor a variavél.
    echo "O valor inserido é igual a 50?";
    echo "<br>";

    //Estrutura de Condição (if, else).
    if ($valor <  50) {
        echo "Não, o valor inserido é menor do que 50. O seu valor é $valor"; //Forma1, onde se insere dentro das aspas.
        echo "<br>"; //Pula linha.
        //Forma2, onde se insere fora das aspas com o auxilio do ponto.
            //echo "Não, o valor inserido é menor do que 50. O seu valor é ".$valor;
    } //Não se coloca ; no fim das chaves, apenas no que está dentro delas.
    elseif ($valor > 50) {
        echo "Não, o valor inserido é maior do que 50. O seu valor é $valor";
        echo "<br>";
    }
    else {
        echo "Sim, o valor inserido é igual a 50.";
        echo "<br>";
    }
?>

</body>
</html>