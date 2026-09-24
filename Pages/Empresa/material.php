<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais - DescarteJá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php include "../../includes/navbar_empresa.php"; ?>

<main class="conteudo-empresa">

    <div class="container">

    <div class="text-center mb-5">
        <h1>Materiais aceitos</h1>
        <p class="text-muted">
            Selecione os resíduos eletrônicos recebidos pela sua empresa.
        </p>
    </div>

    <div class="card">
        <div class="card-body">

        <button type="button" class="btn btn-secondary" onclick="window.location.href='../../Pages/Empresa/painel.php'">
            Voltar ao painel
        </button>

            <h3 class="mb-4">
                Selecione os materiais
            </h3>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="celulares">

                        <label class="form-check-label" for="celulares">
                            Celulares
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="computadores">

                        <label class="form-check-label" for="computadores">
                            Computadores
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="televisores">

                        <label class="form-check-label" for="televisores">
                            Televisores
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="monitores">

                        <label class="form-check-label" for="monitores">
                            Monitores
                        </label>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="pilhas">

                        <label class="form-check-label" for="pilhas">
                            Pilhas
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="baterias">

                        <label class="form-check-label" for="baterias">
                            Baterias
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="cabos">

                        <label class="form-check-label" for="cabos">
                            Cabos
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               id="impressoras">

                        <label class="form-check-label" for="impressoras">
                            Impressoras
                        </label>
                    </div>

                </div>

            </div>

            <button type="button" class="btn btn-success mt-4">
                Salvar materiais
            </button>

        </div>
    </div>

</main>

<?php include "../../includes/footer.php"; ?>

</body>
</html>