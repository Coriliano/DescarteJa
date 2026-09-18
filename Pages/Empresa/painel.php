<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel da Empresa - DescarteJá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php include "../../includes/navbar_empresa.php"; ?>

<main class="area-empresa">

    <div class="container">

        <div class="painel-boas-vindas p-4 mb-4">
            <h2>Bem-vindo ao painel da empresa</h2>
            <p>Gerencie as informações do seu ponto de descarte pelo menu ao lado.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="painel-card p-4">
                    <h5>Denúncias recebidas</h5>
                    <h2>0</h2>
                    <p>Denúncias relacionadas ao seu ponto.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="painel-card p-4">
                    <h5>Favoritos</h5>
                    <h2>0</h2>
                    <p>Usuários adicionaram seu local aos favoritos.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="painel-card p-4">
                    <h5>Status</h5>
                    <h2>Ativo</h2>
                    <p>Seu ponto está disponível no mapa.</p>
                </div>
            </div>

        </div>

    </div>

</main>

</body>
</html>