    <main class="confirmar-exclusao container text-light fw-bold mt-5" id="container">

        <h2 class="mt-3">Excluir Vaga</h2>

        <form method="post">
            <div class="form-group">
                <p>Você deseja realmente excluir a despesa <strong class="text-danger"><?=$obDespesa->descricao?></strong>?</p>
            </div>

            <div class="d-flex justify-content-between form-group mb-3 mt-3">
                <a href="index.php">
                    <button type="button" class="btn btn-primary">Cancelar</button>
                </a>

                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>
        </form>