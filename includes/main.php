    <?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;

            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
                break;
        }
    }

    $resultados = '';
    foreach($despesas as $despesa){
        $resultados .= '<tr>
                            <td>'.$despesa->cobradorNome.'</td>
                            <td>'.$despesa->descricao.'</td>
                            <td>'.($despesa->status == 'p' ? 'Pago' : 'Pendente').'</td>
                            <td>'.date('d/m/Y',strtotime($despesa->vencData)).'</td>
                            <td>'.date('d/m/Y',strtotime($despesa->pagData)).'</td>
                            <td>'.$despesa->valor.'</td>
                            <td>
                                <a href="editar.php?id='.$despesa->id.'">
                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                                </a>
                                <a href="excluir.php?id='.$despesa->id.'">
                                    <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="7" class="text-center">Nenhuma despesa encontrada</td>';
    ?>

    <main class="container mt-5" id="container">
        <section id="left-container">
            <div class="col-lg-12">
                <h2 class="text-light">CONTROLE DE DESPESAS</h2>
            </div>
            <div id="left-container-total">
                <div class="row mt-4">
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <h6 class="text-light">SALDO ATUAL</h6>
                            <h2 class="text-danger fw-bold">R$12.762,53</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="left-container-despesas">
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="text-light">Despesas</h4>
                        </div>
                        <div>
                            <a href="cadastrar.php">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar Despesa
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>Cobrador</th>
                                        <th>Descrição</th>
                                        <th>Status</th>
                                        <th>Data de Vencimento</th>
                                        <th>Data de Pagamento</th>
                                        <th class="text-danger">Valor</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?=$resultados?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="left-container-receitas">
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="text-light">Receitas</h4>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success btn-sm">
                                Adicionar Receita
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Descrição</th>
                                        <th>Status</th>
                                        <th>Data de Vencimento</th>
                                        <th>Data de Pagamento</th>
                                        <th class="text-success">Valor</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

        </section>