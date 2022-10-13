<?php
try {
    $conexao = new PDO('mysql:host=162.144.232.102;dbname=apirestapp_grupo2', 'apirestapp_grupo2', 'aGe4o;RG~zfM');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Conexão com sucesso");
} catch(PDOException $erro) {
    echo "ERRO => " . $erro->getMessage();
}
?>