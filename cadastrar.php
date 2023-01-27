<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'CADASTRO DE DESPESA');

use \App\Entity\Despesa;
$obDespesa = new Despesa;

//VALIDAÇÃO DO POST
if(isset($_POST['cobradorNome'], $_POST['descricao'], $_POST['status'], $_POST['vencData'], $_POST['pagData'], $_POST['valor'])){
    
    $obDespesa->cobradorNome = $_POST['cobradorNome'];
    $obDespesa->descricao = $_POST['descricao'];
    $obDespesa->status = $_POST['status'];
    $obDespesa->vencData = $_POST['vencData'];
    $obDespesa->pagData = $_POST['pagData'];
    $obDespesa->valor = $_POST['valor'];
    $obDespesa->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';