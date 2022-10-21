<?php
 include('conexao.php');
    class iten{
        private $nome;
        private $status;
        private $descricao;
        private $data_cad;
        private $logradouro;
        private $cidade;
        private $bairro;
        private $numero;
        private $uf;
        private $conn;

        public function __constructor()
    {
        
        
    }

    public function mostra(){
        $this->conn = new Conexao;
        $sql =  "SELECT * from itens";
        $resultado = $this->conn->executeQuery($sql);
        while ($row_itens = mysqli_fetch_assoc($resultado)){
            echo $row_itens['nome'];
            echo $row_itens['Status'];
            echo $row_itens['descricao'];
        }
    }
}

    