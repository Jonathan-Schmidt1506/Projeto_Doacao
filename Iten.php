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

    public function cadastroIten(array $dados)
    {
        $dados['data_cad'] = date('Y-m-d G:i:s');
        
        $sql = "INSERT INTO itens(
            nome,
            status,
            descricao,
            data_cad,
            logradouro,
            cidade,
            bairro,
            numero,
            uf) VALUES (
            '{$dados['nome']}',
            '{$dados['status']}',
            '{$dados['descricao']},
            '{$dados['data_cad']},
            '{$dados['logradouro']}',
            '{$dados['cidade']}',
            '{$dados['bairro']}',
            '{$dados['numero']}',
            '{$dados['uf']}'
            )";
          
        $this->conn = new Conexao;
        $this->conn->executeQuery($sql);

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

    