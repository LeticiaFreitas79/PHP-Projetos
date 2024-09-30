<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <?php
        class Contas
        {
            public $saldo = 0;
            public $titular;

            public function sacar($valor)
            {
                $this->saldo -= $valor;
            }

            public function depositar($valor)
            {
                $this->saldo += $valor;
            }

            public function verSaldo()
            {
                return $this->saldo;
            }
        }
    ?>
</body>
</html>