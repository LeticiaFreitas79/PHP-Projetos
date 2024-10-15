<!--Status do Código: Finalizado e Comentado-->

<?php
    require_once("../model/banco.php"); //Inclui o arquivo 'banco.php' ao script atual.

    class delete //Define a classe 'delete'.
    {
        private $delete; //Propriedade privada.

        public function __construct($id) //Método construtor da classe, recebe o parâmetro '$id'.
        {
            $this -> delete = new Banco(); //Permite que 'delete' utiize métodos da classe 'Banco'.
            if($this -> delete -> deleteLivro($id) == TRUE) //Aqui, é chamado o método deleteLivro da instância de Banco, passando o $id como argumento. O método deve retornar TRUE se a exclusão for bem-sucedida.
            {
                //Se o registro for deletado com sucesso, um alerta é exibido informando o usuário e, em seguida, o navegador é redirecionado para ../view/index.php.
                echo "<script> alert ('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
            }
            else
            {
                //Se a exclusão falhar, um alerta de erro é mostrado, e o usuário é levado de volta à página anterior usando history.back().
                echo "<script> alert ('Erro ao deletar resgistro!')/history.back() </script>";
            }
        }
    }

    new delete($_GET['id']); //Cria uma nova instância da classe delete, passando o valor do parâmetro id que foi enviado via URL. Isso inicia o processo de exclusão.
?>