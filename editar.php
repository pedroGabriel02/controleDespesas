<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','EDITAR DESPESA');

use \App\Entity\Despesa;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//CONSULTA A DESPESA
$obDespesa = Despesa::getDespesa($_GET['id']);

//VALIDAÇÃO DA DESPESA
if(!$obDespesa instanceof Despesa){
    header('location: index.php?status=error');
    exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['cobradorNome'], $_POST['descricao'], $_POST['status'], $_POST['vencData'], $_POST['pagData'], $_POST['valor'])){

    $obDespesa->cobradorNome = $_POST['cobradorNome'];
    $obDespesa->descricao = $_POST['descricao'];
    $obDespesa->status = $_POST['status'];
    $obDespesa->vencData = $_POST['vencData'];
    $obDespesa->pagData = $_POST['pagData'];
    $obDespesa->valor = $_POST['valor'];
    $obDespesa->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';