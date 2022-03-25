<?php
include "Roupa.php";

$novoCadastro = new Roupa('Camisa', 'Calvin Klein', '16', 150.90);
$novoCadastro->Cadastrar();

$dados = Roupa::ListarTodos();
var_dump($dados);