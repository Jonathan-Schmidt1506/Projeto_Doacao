<?php

class Usuario{
    private $id;
    private $nome;
    private $data_nasc;
    private $email;
    private $telefone;
    private $celular;
    private $instagram;
    private $facebook;
    private $senha;
    private $cpf;
    private $logradouro;
    private $cidade;
    private $bairro;
    private $numero;
    private $whatsapp;
    private $uf;
    private $aceita_termos;
    private $conn;
    
    public function __constructor(){
            
        require_once 'conexao.php';
        $this->conn =  new Conexao();
        

    } 

    private function verificaTermos(bool $aceitaTermos): bool{
        if($aceitaTermos){
            return true;
        }
       
        return true;
    }
    private function verificaIdade(string $data_nascimento){
        $idade = 0;
        // calculo de idade 


        // faz a logica
        if($idade > 18){
            return true;
        }
       
        return true;
    }

    public function cadastro(array $dados){
      
        if($this->verificaIdade($dados['data_nasc'])){
            if($this->verificaTermos($dados['aceita_termos'])){
                // a inserção dos dados no banco de dados
           
                $sql = "INSERT INTO usuario(
                    NULL,
                    'nome',
                    'data_nasc', 
                    'email', 
                    'telefone', 
                    'celular',
                    'instagram', 
                    'facebook', 
                    'senha',
                    'cpf',
                    'logradouro',
                    'cidade',
                    'bairro',
                    'numero',
                    'whatsapp',
                    'uf',
                    'aceita_termos') VALUES (
                        '{$dados['nome']}',
                        '{$dados['data_nasc']}',
                        '{$dados['email']}',
                        '{$dados['telefone']}',
                        '{$dados['celular']}',
                        '{$dados['instagram']}',
                        '{$dados['facebook']}',
                        '{$dados['senha']}',
                        '{$dados['cpf']}',
                        '{$dados['logradouro']}',
                        '{$dados['cidade']}',
                        '{$dados['bairro']}',
                        '{$dados['numero']}',
                        '{$dados['whatsapp']}',
                        '{$dados['uf']}',
                        '{$dados['aceita_termos']}',
                        )";

                $conexao = new PDO("mysql:host={$this->host};dbname={$this->banco}", "{$this->user}", "{$this->senha}");
                
                $res = mysqli_query( $conexao, $sql);
       
                
                if (mysqli_query( $this->conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error( $this->conn);
                }
                mysqli_close( $this->conn);

                echo "Cadastro criado com sucesso!";
                exit;
            }
        }
    }


}