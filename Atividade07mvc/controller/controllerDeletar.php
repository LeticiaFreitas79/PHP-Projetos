<?php
    require_once("../model/banco.php");

    class delete
    {
        private $delete;

        public function __construct($id)
        {
            $this -> delete = new Banco();
            if($this -> delete -> deleteLivro($id) == TRUE)
            {
                echo "<script> alert ('Registro deletado com sucesso!');document.location='../view/index.php'</script>"
            }
            else
            {
                echo "<script> alert ('Erro ao deletar resgistro!')/history.back() </script>";
            }
        }
    }

    new delete($_GET['id']);?>