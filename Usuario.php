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
    public function iniciaSessao($email, $senha){
      

        //$senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' " or die("ERRO AO SELECIONAR");
     
        $this->conn = new Conexao;
        $result = $this->conn->executeQuery($sql);
     
        if($result->num_rows > 0){

           @header('Location: '. 'http://localhost/Projeto_Doacao/index.php');
           exit();
        } else {
            
            if($_SESSION['log_in'] == false){
                @header('Location: '. 'http://localhost/Projeto_Doacao/login.html');
                exit();
            }else{
                @header('Location: '. 'http://localhost/Projeto_Doacao/index.php');
                exit();
            }
            
        }
      }
     
      //função para deslogar o usuário
      private function terminaSessao(){
        $sessao = false;
        echo "DESLOGADO COM SUCESSO";
      }
     
    }

