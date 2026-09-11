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

        <img
            src="../img/mapa.jpg"
            class="card-img-top"
            alt="Mapa"
        >

        <div class="card-body">

            <h5 class="card-title">
                Mapa
            </h5>

            <p class="card-text">
                Encontre empresas e ecopontos próximos de você
                para realizar o descarte correto do seu lixo eletrônico.
            </p>

        </div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                Ecopontos
            </li>

            <li class="list-group-item">
                Empresas
            </li>

            <li class="list-group-item">
                Locais próximos
            </li>

        </ul>

        <div class="card-body">

            <a
                href="mapa.php"
                class="btn btn-card"
            >
                Encontrar local
            </a>

        </div>

    </div>


    <div class="card">

        <img
            src="../img/ecoponto.jpg"
            class="card-img-top"
            alt="Projeto DescarteJá"
        >

        <div class="card-body">

            <h5 class="card-title">
                Sobre o DescarteJá
            </h5>

            <p class="card-text">
                Conheça o projeto DescarteJá e descubra como nossa
                plataforma busca facilitar o descarte correto de
                resíduos eletrônicos.
            </p>

        </div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                Descarte correto
            </li>

            <li class="list-group-item">
                Preservação ambiental
            </li>

            <li class="list-group-item">
                Informação e conscientização
            </li>

        </ul>

        <div class="card-body">

            <a
                href="sobre.php"
                class="btn btn-card"
            >
                Conheça o projeto
            </a>

        </div>

    </div>


    <div class="card">

        <img
            src="../img/empresa.jpg"
            class="card-img-top"
            alt="Blog DescarteJá"
        >

        <div class="card-body">

            <h5 class="card-title">
                Blog
            </h5>

            <p class="card-text">
                Acompanhe conteúdos e informações sobre lixo
                eletrônico, reciclagem, descarte correto e meio ambiente.
            </p>

        </div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                Notícias
            </li>

            <li class="list-group-item">
                Dicas
            </li>

            <li class="list-group-item">
                Meio ambiente
            </li>

        </ul>

        <div class="card-body">

            <a
                href="blog/blog.php"
                class="btn btn-card"
            >
                Acessar blog
            </a>

        </div>

    </div>

</div>
</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>