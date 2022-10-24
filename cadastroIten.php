<?php
include 'Iten.php';

$dados = $_POST;

$iten = new Iten();

$iten->cadastroIten($dados);

?>