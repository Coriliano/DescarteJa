<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<?php include '../includes/navbar.php'; ?>


<div class="container-fluid cidades">

    <h1>Encontre lugares próximos</h1>

    <div class="cards">

        <div class="card">
            <img src="../img/mapa.jpg" class="card-img-top" alt="Mapa">

            <div class="card-body">
                <h5 class="card-title">Mapa</h5>

                <p class="card-text">
                    Encontre empresas e ecopontos para realizar o descarte correto de lixo eletrônico.
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Ecopontos</li>
                <li class="list-group-item">Empresas</li>
                <li class="list-group-item">Locais próximos</li>
            </ul>

            <div class="card-body">
                <a href="mapa.html" class="btn btn-card">Ver mapa</a>
            </div>
        </div>

        <div class="card">
            <img src="../img/ecoponto.jpg" class="card-img-top" alt="Ecoponto">

            <div class="card-body">
                <h5 class="card-title">Ecopontos</h5>

                <p class="card-text">
                    Consulte os ecopontos disponíveis e descubra onde descartar seus equipamentos eletrônicos.
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Pilhas e baterias</li>
                <li class="list-group-item">Celulares</li>
                <li class="list-group-item">Eletrônicos</li>
            </ul>

            <div class="card-body">
                <a href="mapa.html" class="btn btn-card">Encontrar</a>
            </div>
        </div>

        <div class="card">
            <img src="../img/empresa.jpg" class="card-img-top" alt="Empresa">

            <div class="card-body">
                <h5 class="card-title">Empresas</h5>

                <p class="card-text">
                    Encontre empresas que realizam coleta, reciclagem ou recebem resíduos eletrônicos.
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Reciclagem</li>
                <li class="list-group-item">Coleta</li>
                <li class="list-group-item">Descarte</li>
            </ul>

            <div class="card-body">
                <a href="mapa.html" class="btn btn-card">Encontrar</a>
            </div>
        </div>

    </div>

</div>


<div class="botaomapa">
    <a href="mapa.html" class="btn btn-card">Abrir Mapa</a>
</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>