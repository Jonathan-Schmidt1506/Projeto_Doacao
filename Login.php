<?php
include ('Usuario.php');

//recebendo os dados do login.html
$dados = $_POST;

$usuario = new Usuario();

$usuario->iniciaSessao($dados['email'], $dados['senha']);



