<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa - DescarteJá</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

    <?php include "../includes/navbar.php"; ?>

    <main class="mapa-pagina">

        <div class="mapa-titulo">

            <h1>
                Encontre um local para descartar seu lixo eletrônico
            </h1>

            <p>
                Pesquise por cidade, empresa, ecoponto ou material aceito.
            </p>

        </div>

        <div class="mapa-container">

            <aside class="mapa-sidebar">

                <div id="lista-container">

                    <div class="sidebar-header">

                        <h2>
                            Locais de descarte
                        </h2>

                        <p>
                            Encontre o ponto mais próximo de você.
                        </p>

                        <div class="campo-pesquisa">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                id="pesquisa"
                                placeholder="Digite uma cidade ou local...">

                        </div>

                        <button
                            id="btn-filtros"
                            class="btn-filtros"
                            onclick="abrirFiltros()">

                            <i class="bi bi-sliders"></i>

                            Filtros

                            <i class="bi bi-chevron-down"></i>

                        </button>

                    </div>

                    <div
                        id="painel-filtros"
                        class="painel-filtros">

                        <div class="filtro-header">

                            <h3>
                                Filtrar resultados
                            </h3>

                            <button
                                onclick="fecharFiltros()"
                                class="btn-fechar-filtro">

                                <i class="bi bi-x-lg"></i>

                            </button>

                        </div>

                        <div class="grupo-filtro">

                            <h4>
                                Tipo de local
                            </h4>


                            <div class="filtro-opcoes">

                                <button
                                    class="filtro-opcao ativo"
                                    data-tipo="todos"
                                    onclick="filtrarTipo('todos')">
                                    Todos
                                </button>

                                <button
                                    class="filtro-opcao"
                                    data-tipo="Ecoponto"
                                    onclick="filtrarTipo('Ecoponto')">
                                    Ecopontos
                                </button>

                                <button
                                    class="filtro-opcao"
                                    data-tipo="Empresa"
                                    onclick="filtrarTipo('Empresa')">
                                    Empresas
                                </button>

                            </div>

                        </div>

                        <div class="grupo-filtro">

                            <h4>
                                Materiais aceitos
                            </h4>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Celulares"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Celular
                                </span>

                            </label>

                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Computadores"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Computador
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Televisores"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Televisão
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Pilhas"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Pilhas
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Eletrodomésticos"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Eletrodomésticos
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Cabos"
                                    onchange="aplicarFiltros()">

                                <span>
                                    Cabos
                                </span>

                            </label>

                        </div>

                        <button
                            onclick="limparFiltros()"
                            class="btn-limpar-filtros">

                            Limpar filtros

                        </button>

                    </div>

                    <div class="resultados-header">

                        <span id="quantidade-resultados">
                            Locais encontrados
                        </span>

                    </div>

                    <div id="lista-locais"></div>

                </div>

                <div
                    id="detalhes-local"
                    class="detalhes-local">

                    <button
                        class="btn-voltar"
                        onclick="voltarLista()">

                        <i class="bi bi-arrow-left"></i>

                        Voltar para os resultados

                    </button>

                    <div class="detalhe-icone">

                        <i class="bi bi-recycle"></i>

                    </div>

                    <span
                        id="tipo-local-detalhes"
                        class="tipo-local">
                    </span>

                    <h2 id="nome-local">
                    </h2>

                    <div class="detalhe-item">

                        <i class="bi bi-geo-alt"></i>

                        <div>

                            <strong>
                                Endereço
                            </strong>

                            <p id="endereco-local">
                            </p>

                        </div>

                    </div>

                    <div class="detalhe-item">

                        <i class="bi bi-clock"></i>

                        <div>

                            <strong>
                                Horário de funcionamento
                            </strong>

                            <p id="horario-local">
                            </p>

                        </div>

                    </div>

                    <div class="detalhe-materiais">

                        <h3>
                            Materiais aceitos
                        </h3>

                        <ul id="materiais-local">
                        </ul>

                    </div>

                    <button
                        id="btn-como-chegar"
                        class="btn-como-chegar">
                        <i class="bi bi-sign-turn-right"></i>
                        Como chegar
                    </button>


                </div>

            </aside>

            <div id="map"></div>

        </div>

    </main>

    <?php include "../includes/footer.php"; ?>

    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>

    <script
        src="../js/mapa.js">
    </script>

</body>
</html>