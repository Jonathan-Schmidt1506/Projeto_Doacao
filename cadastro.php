<?php
include 'Usuario.php';


//pega a informação do cadastro.html e executa a função cadastro do Usuario.php
$dados = $_POST;

$usuario = new Usuario();

$usuario->cadastro($dados);

?>