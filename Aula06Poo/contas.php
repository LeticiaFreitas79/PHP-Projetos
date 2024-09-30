<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
</head>
<body>
    <?php
        class Agencia
        {
            public $nome;
            public $telefone;

            public function getNome()
            {
                return $this->nome;
            }

            public function getTelefone()
            {
                return $this->telefone;
            }
        }

        class Titular
        {
            public $nome;
            public $celular;

            public function setDados(array $dados)
            {
                $this->nome = $dados['nome'];
                $this->nome = $dados['celular'];
            }

            public function getNome()
            {
                return $this->nome;
            }

            public function getCelular()
            {
                return $this->celular;
            }
        }

        class Contas
        {
            public $agencia;
            public $titular;
            public $saldo;

            public function setAgencia(Agencia $agencia)
            {
                $this->agencia = $agencia;
            }

            public function setAgencia()
            {
                return $this->agencia;
            }

            public function setTitular(Titular $titular)
            {
                $this->titular = $titular;
            }

            public function setTitular()
            {
                return $this->titular;
            }
        }
    ?>
</body>
</html>