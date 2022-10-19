<?php
include 'Usuario.php';

$dados = $_POST;

$usuario = new Usuario();

$usuario->iniciaSessao($dados['email'], $dados['senha']);



