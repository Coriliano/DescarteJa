<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mapa - DescarteJá</title>


    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- Leaflet -->

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    >


    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- CSS do projeto -->

    <link
        rel="stylesheet"
        href="../css/style.css"
    >

</head>


<body>


    <!-- NAVBAR -->

    <?php include "../includes/navbar.php"; ?>


    <!-- ============================= -->
    <!-- PÁGINA DO MAPA -->
    <!-- ============================= -->

    <main class="mapa-pagina">


        <!-- TÍTULO -->

        <div class="mapa-titulo">

            <h1>
                Encontre um local para descartar seu lixo eletrônico
            </h1>

            <p>
                Pesquise por cidade, empresa, ecoponto ou material aceito.
            </p>

        </div>


        <!-- ============================= -->
        <!-- MAPA + SIDEBAR -->
        <!-- ============================= -->

        <div class="mapa-container">


            <!-- ============================= -->
            <!-- SIDEBAR -->
            <!-- ============================= -->

            <aside class="mapa-sidebar">


                <!-- LISTA PRINCIPAL -->

                <div id="lista-container">


                    <!-- CABEÇALHO -->

                    <div class="sidebar-header">

                        <h2>
                            Locais de descarte
                        </h2>

                        <p>
                            Encontre o ponto mais próximo de você.
                        </p>


                        <!-- PESQUISA -->

                        <div class="campo-pesquisa">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                id="pesquisa"
                                placeholder="Digite uma cidade ou local..."
                            >

                        </div>


                        <!-- BOTÃO FILTROS -->

                        <button
                            id="btn-filtros"
                            class="btn-filtros"
                            onclick="abrirFiltros()"
                        >

                            <i class="bi bi-sliders"></i>

                            Filtros

                            <i class="bi bi-chevron-down"></i>

                        </button>


                    </div>


                    <!-- ============================= -->
                    <!-- PAINEL DE FILTROS -->
                    <!-- ============================= -->

                    <div
                        id="painel-filtros"
                        class="painel-filtros"
                    >

                        <div class="filtro-header">

                            <h3>
                                Filtrar resultados
                            </h3>

                            <button
                                onclick="fecharFiltros()"
                                class="btn-fechar-filtro"
                            >

                                <i class="bi bi-x-lg"></i>

                            </button>

                        </div>


                        <!-- TIPO -->

                        <div class="grupo-filtro">

                            <h4>
                                Tipo de local
                            </h4>


                            <div class="filtro-opcoes">

                                <button
                                    class="filtro-opcao ativo"
                                    data-tipo="todos"
                                    onclick="filtrarTipo('todos')"
                                >
                                    Todos
                                </button>

                                <button
                                    class="filtro-opcao"
                                    data-tipo="Ecoponto"
                                    onclick="filtrarTipo('Ecoponto')"
                                >
                                    Ecopontos
                                </button>

                                <button
                                    class="filtro-opcao"
                                    data-tipo="Empresa"
                                    onclick="filtrarTipo('Empresa')"
                                >
                                    Empresas
                                </button>

                            </div>

                        </div>


                        <!-- MATERIAIS -->

                        <div class="grupo-filtro">

                            <h4>
                                Materiais aceitos
                            </h4>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Celulares"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Celular
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Computadores"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Computador
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Televisores"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Televisão
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Pilhas"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Pilhas
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Eletrodomésticos"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Eletrodomésticos
                                </span>

                            </label>


                            <label class="checkbox-filtro">

                                <input
                                    type="checkbox"
                                    value="Cabos"
                                    onchange="aplicarFiltros()"
                                >

                                <span>
                                    Cabos
                                </span>

                            </label>

                        </div>


                        <!-- LIMPAR -->

                        <button
                            onclick="limparFiltros()"
                            class="btn-limpar-filtros"
                        >

                            Limpar filtros

                        </button>

                    </div>


                    <!-- RESULTADOS -->

                    <div class="resultados-header">

                        <span id="quantidade-resultados">
                            Locais encontrados
                        </span>

                    </div>


                    <!-- LISTA GERADA PELO JAVASCRIPT -->

                    <div id="lista-locais"></div>


                </div>


                <!-- ============================= -->
                <!-- DETALHES DO LOCAL -->
                <!-- ============================= -->

                <div
                    id="detalhes-local"
                    class="detalhes-local"
                >


                    <!-- VOLTAR -->

                    <button
                        class="btn-voltar"
                        onclick="voltarLista()"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Voltar para os resultados

                    </button>


                    <!-- ÍCONE -->

                    <div class="detalhe-icone">

                        <i class="bi bi-recycle"></i>

                    </div>


                    <!-- TIPO -->

                    <span
                        id="tipo-local-detalhes"
                        class="tipo-local"
                    >
                    </span>


                    <!-- NOME -->

                    <h2 id="nome-local">
                    </h2>


                    <!-- ENDEREÇO -->

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


                    <!-- HORÁRIO -->

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


                    <!-- MATERIAIS -->

                    <div class="detalhe-materiais">

                        <h3>
                            Materiais aceitos
                        </h3>


                        <ul id="materiais-local">
                        </ul>

                    </div>


                    <!-- COMO CHEGAR -->

                    <button
                        id="btn-como-chegar"
                        class="btn-como-chegar"
                    >

                        <i class="bi bi-sign-turn-right"></i>

                        Como chegar

                    </button>


                </div>

            </aside>


            <!-- ============================= -->
            <!-- MAPA -->
            <!-- ============================= -->

            <div id="map"></div>


        </div>

    </main>


    <!-- FOOTER -->

    <?php include "../includes/footer.php"; ?>


    <!-- Leaflet -->

    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>


    <!-- JavaScript do mapa -->

    <script
        src="../js/mapa.js">
    </script>


</body>

</html>