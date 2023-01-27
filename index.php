<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Despesa;

$despesas = Despesa::getDespesas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/main.php';
include __DIR__.'/includes/footer.php';

?>