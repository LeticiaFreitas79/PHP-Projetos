<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title> <!--a revisar-->
</head>
<body>
    <?php //Abre o código PHP.
        class Contas //Em POO, a classe permite a criação de objetos (propriedades(váriaveis) e métodos(funções)).
        {
            //Declaração de Váriaveis.
            //Public indica que a propriedade é acessível de fora da classe. Outros objetos/funções podem acessar/modificar a propriedade diretamente.
            public $saldo; 
            public $titular; 
        
            //Método para realizar um saque.
            public function sacar($valor)
                //public: Indica que esse método pode ser chamado em instancias de classe a partir de outros objetos/funções.
                //function: palavra-chave que inicia a definição do método.
                //sacar: nome do método.
                //($valor): parâmetro que é aceito pelo método. Quando se chama um parâmetro para dentro de uma função, se deve inserir-lo obrigatóriamente.
            {
                echo"<hr>Saque Efetuado - Valor: <b> $valor </b><hr>"; //Mostra uma mensagem ao usuário informando o valor que foi sacado.
                $this->saldo = $this->saldo - $valor; //Subtrai ($valor) do saldo atual ($this->saldo) e atualiza o saldo com esse novo valor.
                    //$this: permite acessar as propriedades/métodos da instância atual, essencial para manipular o estado do objeto. 
                    //$this também permite chamar outros métodos da mesma classe.
            }

            //Método para fazer depósito.
            public function depositar($valor)
                //Os detalhes de cada parte já foram explicados nas linhas 20-21-22-23.
            {
                echo"<hr>Depósito Efetuado - Valor: <b> $valor </b><hr>";
                $this->saldo = $this->saldo + $valor; //Soma ($valor) do saldo atual.
                    //Os detalhes de cada parte já foram explicados nas linhas 27-28.
            }

            //Retorna o saldo atual.
            public function verSaldo()
            {
                return $this->saldo; //Retorna o valor de 'saldo'. Permite que 'saldo' seja acessado fora do método.
                    //return: palavra-chave usuada para devolver um valor de uma função/método. Quando executado, encerra a execução do método e envia o valor especificado de volta para quem chamou o método.
            }
        }

        //Criação de novos objetos na classe 'Contas'.
        $conta1 = new Contas();
        $conta2 = new Contas();

        //Definindo o nome do titular das contas.
        $conta1->titular = 'Luciana de Souza Lima';
        $conta2->titular = 'Aline de Oliveira';

        //Atribuindo o valor de depósito em ambas as contas.
        $conta1->depositar(500);
        $conta2->depositar(1000);

        echo '<pre>'; //Bloco de texto pré-formatado. Mantém o texto na mesma formatação do código fonte.
        var_dump($conta1); //Exibe informações sobre a váriavel '$contas1'
        echo '<hr>'; //Cria uma linha para separar as informações.
        var_dump($conta2); //Exibe informações sobre a váriavel '$contas2'

        echo '<hr>'; //Cria uma linha para separar as informações.
        echo 'Saldo Atual em Conta1: '.$conta1->verSaldo(); //Mostra o saldo atual da Conta1.
        echo '<br>'; //Cria uma linha para separar as informações.
        echo 'Saldo Atual em Conta2: '.$conta2->verSaldo(); //Mostra o saldo atual da Conta2.

        //Atribuindo valor de saque em ambas as contas.
        echo '<hr>'; //Cria uma linha para separar as informações.
        $conta1->sacar(400);
        $conta2->sacar(600);

        echo '<hr>'; //Cria uma linha para separar as informações.
        echo 'Saldo Atual em Conta1: '.$conta1->verSaldo(); //Mostra o saldo atual da Conta1.
        echo '<br>'; //Cria uma linha para separar as informações.
        echo 'Saldo Atual em Conta2: '.$conta2->verSaldo(); //Mostra o saldo atual da Conta2.

        echo '<hr>'; //Cria uma linha para separar as informações.
        echo 'Titular sa Conta1: '.$conta1->titular; //Mostra o nome do titular da Conta1.
        echo '<br>'; //Cria uma linha para separar as informações.
        echo 'Titular sa Conta2: '.$conta2->titular; //Mostra o nome do titular da Conta2.
    ?> <!--Fecha o código PHP-->
</body>
</html>