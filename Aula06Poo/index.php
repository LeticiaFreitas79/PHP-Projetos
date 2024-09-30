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
    ?>
</body>
</html>