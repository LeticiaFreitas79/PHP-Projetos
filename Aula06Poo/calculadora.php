<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
        class Calculadora
        {
            public $num1;
            public $num2;
            
            //Método para realizar a soma de dois números.
            public function somar($num1, $num2)
            {
                echo "<hr> O resultado da soma dos dois números é: <b> $resultado </b></hr>";
                $resultado = $num1 + $num2;
            }

            //Método para realizar a subtração de dois números.
            public function subtrair($num1, $num2)
            {
                echo "<hr> O resultado da subtração dos dois números é: <b> $resultado </b></hr>";
                $resultado = $num1 - $num2;
            }

            //Método para realizar a divisão de dois números.
            public function dividir($num1, $num2)
            {
                echo "<hr> O resultado da divisão dos dois números é: <b> $resultado </b></hr>";
                $resultado = $num1 / $num2;
            }

            //Método para realizar a multiplicação de dois números.
            public function multiplicar($num1, $num2)
            {
                echo "<hr> O resultado da multiplicação dos dois números é: <b> $resultado </b></hr>";
                $resultado = $num1 * $num2;
            }
        }
    ?>
    <form action="calculadora.php" method="POST">
        Primeiro Número: <input type="text" name="num1"><br>
        Segundo Número: <input type="text" name="num2"><br>
    </form>
</body>
</html>