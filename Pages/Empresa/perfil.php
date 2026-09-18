<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Empresa - DescarteJá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php include "../../includes/navbar_empresa.php"; ?>


<main class="conteudo-empresa">

    <div class="container">
        
    <div class="text-center mb-5">
        <h1>Perfil da empresa</h1>
        <p class="text-muted">
            Gerencie os dados da sua empresa e da sua conta.
        </p>
    </div>

    <div class="card">
        <div class="card-body">

        <button type="button" class="btn btn-secondary" onclick="window.location.href='../../Pages/Empresa/painel.php'">
            Voltar ao painel
        </button>

            <h3 class="mb-4">Dados da empresa</h3>

            <div class="mb-3">
                <label class="form-label">Nome da empresa</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">CNPJ</label>
                <input type="text"
                       class="form-control"
                       placeholder="00.000.000/0000-00">
            </div>

            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Site</label>
                <input type="url"
                       class="form-control"
                       placeholder="https://exemplo.com">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Descrição da empresa
                </label>

                <textarea class="form-control"
                          rows="5"
                          placeholder="Descreva sua empresa e os serviços oferecidos."></textarea>
            </div>

            <button type="button" class="btn btn-success">
                Salvar alterações
            </button>

            <hr class="my-5">

            <h3 class="mb-4">Dados de acesso</h3>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nova senha</label>
                <input type="password" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Confirmar nova senha</label>
                <input type="password" class="form-control">
            </div>

            <button type="button" class="btn btn-success">
                Alterar senha
            </button>

        </div>
    </div>

</main>

<?php include "../../includes/footer.php"; ?>

</body>
</html>