<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação a Objetos</title> <!--a revisar-->
</head>
<body>
    <?php
        class Contas 
        {
            public $saldo;
            public $titular;

            //Método para realizar um saque.
            public function sacar($valor)
            {
                echo"<hr>Saque Efetuado - Valor: <b> $valor </b><hr>";
                $this->saldo = $this->saldo - $valor;
            }

            //Método para fazer depósito.
            public function depositar($valor)
            {
                echo"<hr>Depósito Efetuado - Valor: <b> $valor </b><hr>";
                $this->saldo = $this->saldo - $valor;
            }

            //Retorna o saldo atual.
            public function verSaldo()
            {
                return $this->saldo;
            }
        }

        $conta1 = new Contas();
        $conta2 = new Contas();

        $conta1->titular = 'Luciana de Souza Lima';
        $conta2->titular = 'Aline de Oliveira';

        $conta1->depositar(500);
        $conta2->depositar(1000);

        echo '<pre>';
        var_dump($conta1);
        echo '<hr>';
        var_dump($conta2);

        echo '<hr>';
        echo 'Saldo Atual em Conta1: '.$conta1->verSaldo();
        echo '<br>';
        echo 'Saldo Atual em Conta2: '.$conta2->verSaldo();


        echo '<hr>';
        $conta1->sacar(400);
        $conta2->sacar(600);

        echo '<hr>';
        echo 'Saldo Atual em Conta1: '.$conta1->verSaldo();
        echo '<br>';
        echo 'Saldo Atual em Conta2: '.$conta2->verSaldo();

        echo '<hr>';
        echo 'Titular sa Conta1: '.$conta1->titular;
        echo '<br>';
        echo 'Titular sa Conta2: '.$conta2->titular;


    ?>
</body>
</html>