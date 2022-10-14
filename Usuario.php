<?php
include('conexao.php');

class Usuario
{
    private $id;
    private $nome;
    private $data_nascimento;
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

    public function __constructor()
    {
    }

    private function verificaTermos(bool $aceitaTermos): bool
    {
        if ($aceitaTermos) {
            return true;
        }

        return true;
    }
    private function verificaIdade(string $data_nascimento)
    {
        $idade = 0;
        // calculo de idade 


        // faz a logica
        if ($idade > 18) {
            return true;
        }

        return true;
    }

    public function cadastro(array $dados)
    {

        if ($this->verificaIdade($dados['data_nascimento'])) {
            if ($this->verificaTermos($dados['aceita_termos'])) {
                // a inserção dos dados no banco de dados

                $sql = "INSERT INTO usuario(
                    nome,
                    data_nascimento, 
                    email, 
                    telefone, 
                    celular,
                    instagram, 
                    facabook, 
                    senha,
                    cpf,
                    logradouro,
                    cidade,
                    bairro,
                    numero,
                    whatsapp,
                    uf,
                    aceita_termos) VALUES (
                        '{$dados['nome']}',
                        '{$dados['data_nascimento']}',
                        '{$dados['email']}',
                        '{$dados['telefone']}',
                        '{$dados['celular']}',
                        '{$dados['instagram']}',
                        '{$dados['facabook']}',
                        '{$dados['senha']}',
                        '{$dados['cpf']}',
                        '{$dados['logradouro']}',
                        '{$dados['cidade']}',
                        '{$dados['bairro']}',
                        '{$dados['numero']}',
                        '{$dados['whatsapp']}',
                        '{$dados['uf']}',
                        '{$dados['aceita_termos']}'
                        )";


                $this->conn = new Conexao;
                $this->conn->executeQuery($sql);
            }
        }
    }
}
