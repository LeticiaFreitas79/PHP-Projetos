<?php
    require_once("../init.php");
    class Banco
    {
        protected $mysqli;

        public function __construct()
        {
            $this->conexao();
        }

        private function conexao()
        {
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        }

        public function setLivro ($nome, $autor, $quantidade, $preco, $data)
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
    }
?>