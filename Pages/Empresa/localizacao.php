<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização - DescarteJá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php include "../../includes/navbar_empresa.php"; ?>

<main class="conteudo-empresa">
    <div class="container">

    <div class="text-center mb-5">
        <h1>Localização do ponto de descarte</h1>
        <p class="text-muted">
            Informe onde os usuários poderão encontrar sua empresa.
        </p>
    </div>

    <div class="card">
        <div class="card-body">

        <button type="button" class="btn btn-secondary" onclick="window.location.href='../../Pages/Empresa/painel.php'">
            Voltar ao painel
        </button>

            <h3 class="mb-4">Endereço</h3>

            <div class="mb-3">
                <label class="form-label">CEP</label>
                <input type="text" class="form-control" placeholder="00000-000">
            </div>

            <div class="mb-3">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" placeholder="Rua, número, complemento">
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Cidade</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Estado</label>
                    <input type="text" class="form-control">
                </div>

            </div>

            <h3 class="mt-4 mb-4">Funcionamento</h3>

            <div class="mb-3">
                <label class="form-label">
                    Horário de funcionamento
                </label>

                <input type="text"
                       class="form-control"
                       placeholder="Ex.: Segunda a sexta, 08:00 às 18:00">
            </div>

            <h3 class="mt-4 mb-4">Localização no mapa</h3>

            <div class="mb-3">
                <label class="form-label">Latitude</label>
                <input type="text" class="form-control" placeholder="-24.000000">
            </div>

            <div class="mb-3">
                <label class="form-label">Longitude</label>
                <input type="text" class="form-control" placeholder="-46.000000">
            </div>

            <button type="button" class="btn btn-success mt-3">
                Salvar localização
            </button>

        </div>
    </div>

</main>

<?php include "../../includes/footer.php"; ?>

</body>
</html>