
<?php

class Conexao {
    private $host = "162.144.232.102";
    private $user = "apirestapp_grupo2";
    private $senha = "aGe4o;RG~zfM";
    private $banco = "apirestapp_grupo2";
    private $conexao;

    function conectar(){
        $this->conexao = new PDO("mysql:host={$this->host};dbname={$this->banco}", "{$this->user}", "{$this->senha}");

        return $this->conexao;

    }

    function fecha(){
        mysqli_close($this->conexao);
    }


}
    /*try{
        parent::conectar();
        if(mysqli_connect_errno() =! 0){
            throw new Exception('fudeu');
        }
    } catch (Exception $e) {
        $e->getMessage();
    }*/
?>
