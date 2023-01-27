    <main class="formulario container text-light fw-bold mt-5" id="container">
        <section class="d-flex justify-content-between mt-3">
            <div class="col-lg-12">
                <h2><?=TITLE?></h2>
            </div>
            <div class="form-group">
                <a href="index.php">
                    <button class="btn btn-success">Voltar</button>
                </a>
            </div>
            </section>

        <hr class="text-light">

        <form method="post" class="row g-3">
            <div class="col-6">
                <label class="form-label">Nome do Cobrador:</label>
                <input type="text" name="cobradorNome" class="form-control" placeholder="Nome Completo" required value="<?=$obDespesa->cobradorNome?>">
            </div>
            <div class="col-6">
                <label class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição da Despesa" required value="<?=$obDespesa->descricao?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Data de Vencimento:</label>
                <input type="date" name="vencData" class="form-control" required value="<?=$obDespesa->vencData?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Data do Pagamento:</label>
                <input type="date" name="pagData" class="form-control" value="<?=$obDespesa->pagData?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Valor:</label>
                <input type="number" placeholder="1.00" step="0.01" name="valor" class="form-control" required value="<?=$obDespesa->valor?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Status:</label>
                <div class="form-check col-md-3 borda">
                    <input class="form-check-input" value="n" type="radio" name="status" checked>
                    <label class="form-check-label">
                        Pendente
                    </label>
                </div>
                <div class="form-check col-md-3 borda">
                    <input class="form-check-input" value="p" type="radio" name="status" <?=$obDespesa->status == 'p' ? 'checked' : ''?>>
                    <label class="form-check-label">
                        Pago
                    </label>
                </div>
            </div>
            <div class="form-group col-5">
                <button type="submit" class="btn btn-danger">Salvar</button>
            </div>
        </form>
