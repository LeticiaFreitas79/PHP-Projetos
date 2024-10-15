<!--Status do Código: Em desenvolvimento-->

<?php
    require_once("../init.php"); //Garante que o arquivo de conexão seja incluído apenas uma vez.
    
    class Banco //Nova classe.
    {
        protected $mysqli; //Propriedade protegida, usada para armazenar a conexão com o Banco de Dados.
            //O modificador protected permite que esta propriedade seja acessada apenas dentro da classe Banco e suas subclasses.

        public function __construct() //Método construtor da classe.
        {
            $this->conexao(); //Chama o método conexao dentro do construtor para estabelecer a conexão com o banco de dados quando um objeto da classe Banco é criado.
        }

        private function conexao() //Método privado, responsável por estabelecer a conexão com o Banco de Dados.
        {
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
                //Cria uma nova instância da classe mysqli, passando constantes para estabelecer a conexão. O resultado é armazenado na propriedade $mysqli.
        }

        public function setLivro ($nome, $autor, $quantidade, $preco, $data) //Método público que recebe os dados e os insere no Banco.
        {
            $stmt = $this->mysqli->prepare("INSERT INTO livros ('nome', 'autor', 'quantidade', 'preco', 'data') VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
            if ($stmt->execute() == TRUE)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getLivro()
        {
            $result = $this->mysqli->query("SELECT * FROM livros");
            while ($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $array[] = $row;
            }
            return $array;
        }

        public function pesquisaLivro($id)
        {
            $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
            return $result->fetch_array(MYSQLI_ASSOC);
        }

        public function deleteLivro($id)
        {
            if($this->mysqli->query("DELETE FROM 'livros' WHERE 'nome' ='".$id."';")==TRUE)
            {
                return true;
            }
        }
        public function updateLivro ($nome,$autor,$quantidade,$preco,$flag,$data,$id)
        {
            $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor` = ?, `quantidade` = ?, `preco` = ?, `flag` = ?, `data` = ? WHERE `nome` = ?");
            $stmt -> bind_param ("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
            if($stmt->execute()==TRUE)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>