<?php

require_once('Usuario.php');



$dados = [
    'nome' => "nicolas",
    'data_nasc' => "1990-09-11",
    'email' => "teste@teste.com.br",
    'telefone' => "(49) 9 9999-9999",
    'celular' => "(49) 9 9999-9999",
    'instagram' => "",
    'facebook' => "",
    'whatsapp' => "(49) 9 9999-9999",
    'logradouro' => "Rua teste 2",
    'cidade' => "São Miguel do Oeste",
    'bairro' => "Centro",
    'numero' => "55",
    'uf' => "SC",
    'senha' => "12345678",
    'cpf' => "000.000.000-00",
    'aceita_termos' => true,
];
$usuario = new Usuario();

$usuario->cadastro($dados);


