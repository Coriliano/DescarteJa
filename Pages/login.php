<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    

<div class="login-pagina">

    <div class="login-apresentacao">

        <div class="texto-login">

            <h1>
                Encontre o local ideal<br>
                para descartar<br>
                seu lixo eletrônico
            </h1>

            <p>
                Localize ecopontos e empresas de reciclagem<br>
                próximos a você e contribua para um futuro mais sustentável.
            </p>

        </div>

        <img 
            class="logo-login" 
            src="../img/Logo DescarteJá.png" 
            alt="Logo DescarteJá"
        >

    </div>



    <div class="login-area">

        <form action="" method="post">

<div class="card login-card">
    <div class="card-header text-center">

        <h2>Entrar</h2>

        <div class="mb-3">
            <label>E-mail</label>
            <input 
                type="email" 
                name="email" 
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label>Senha</label>
            <input 
                type="password" 
                name="senha" 
                class="form-control"
            >
        </div>

        <div class="d-flex justify-content align-items-center gap-4">

            <a href="senha.php" class="small">
                Esqueci minha senha
            </a>

            <a href="index.php" class="btn btn-success">
                Entrar
            </a>

        </div>

    </div>
</div>

        
<div class="text-center criar-conta">
    <a href="cadastro.php" class="btn btn-primary">
        Criar conta
    </a>
</div>

<div class="text-center cadastro-empresa">
    <a href="cadempresa.php" class="btn btn-outline-success">
        Cadastrar como empresa
    </a>
</div>


    </div>

</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>