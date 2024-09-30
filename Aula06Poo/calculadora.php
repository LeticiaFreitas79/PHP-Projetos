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

            //Método para realizar a soma de dois números.
            public function somar($num1, $num2)
            {
                echo "A soma de $num1 e $num2 é: ".$num1+$num2;
                echo '<hr>';
            }

            //Método para realizar a subtração de dois números.
            public function subtrair($num1, $num2)
            {
                echo "A subtração de $num1 e $num2 é: ".$num1-$num2;
                echo '<hr>';
            }

            //Método para realizar a divisão de dois números.
            public function dividir($num1, $num2)
            {
                echo "A divisão de $num1 e $num2 é: ".$num1/$num2;
                echo '<hr>';
            }

            //Método para realizar a multiplicação de dois números.
            public function multiplicar($num1, $num2)
            {
                echo "A multiplicação de $num1 e $num2 é: ".$num1+$num2;
                echo '<hr>';
            }
        }

        $calculadora = new Calculadora();
        $calculadora->somar(4,5);
        $calculadora->subtrair(47,25);
        $calculadora->dividir(16,4);
        $calculadora->multiplicar(21,45);
    ?>
    
</body>
</html>