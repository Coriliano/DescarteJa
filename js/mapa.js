const limitesLitoralSP = L.latLngBounds(
    [-25.35, -48.10],
    [-23.20, -44.00]
);

const map = L.map("map", {

    maxBounds: limitesLitoralSP,

    maxBoundsViscosity: 1.0

});

map.setView(
    [-24.093, -46.620],
    11
);

L.tileLayer(
    "https://tile.openstreetmap.org/{z}/{x}/{y}.png",
    {

        maxZoom: 19,

        attribution:
            '&copy; OpenStreetMap contributors'

    }
).addTo(map);

const locais = [

    {

        id: 0,

        nome: "Ecoponto Mongaguá",

        tipo: "Ecoponto",

        cidade: "Mongaguá",

        endereco: "Mongaguá - SP",

        horario:
            "Segunda a sexta, das 8h às 17h",

        latitude: -24.093,

        longitude: -46.620,

        materiais: [

            "Celulares",

            "Computadores",

            "Eletrônicos",

            "Pilhas"

        ]

    },


    {

        id: 1,

        nome: "Empresa de Reciclagem",

        tipo: "Empresa",

        cidade: "Itanhaém",

        endereco: "Itanhaém - SP",

        horario:
            "Segunda a sexta, das 8h às 18h",

        latitude: -24.180,

        longitude: -46.790,

        materiais: [

            "Computadores",

            "Televisores",

            "Celulares",

            "Cabos"

        ]

    },


    {

        id: 2,

        nome: "Ecoponto Praia Grande",

        tipo: "Ecoponto",

        cidade: "Praia Grande",

        endereco: "Praia Grande - SP",

        horario:
            "Segunda a sábado, das 8h às 17h",

        latitude: -24.005,

        longitude: -46.412,

        materiais: [

            "Celulares",

            "Computadores",

            "Pilhas",

            "Cabos"

        ]

    }

];

let tipoSelecionado = "todos";

let textoPesquisa = "";

locais.forEach(function(local) {


    const marcador = L.marker([

        local.latitude,

        local.longitude

    ]).addTo(map);


    marcador.bindPopup(`

        <div class="popup-local">

            <strong>
                ${local.nome}
            </strong>

            <span>
                ${local.tipo}
            </span>

            <button
                onclick="mostrarLocal(${local.id})"
            >
                Ver detalhes
            </button>

        </div>

    `);

    local.marcador = marcador;

});

function criarListaLocais(lista) {


    const container =
        document.getElementById("lista-locais");


    container.innerHTML = "";

    document.getElementById(
        "quantidade-resultados"
    ).textContent =

        lista.length === 1

            ? "1 local encontrado"

            : `${lista.length} locais encontrados`;


    if (lista.length === 0) {

        container.innerHTML = `

            <div class="sem-resultados">

                <i class="bi bi-search"></i>

                <h3>
                    Nenhum local encontrado
                </h3>

                <p>
                    Tente pesquisar outra cidade
                    ou alterar os filtros.
                </p>

            </div>

        `;

        return;

    }

    lista.forEach(function(local) {


        const card =
            document.createElement("div");


        card.className =
            "local-card";


        card.onclick = function() {

            mostrarLocal(local.id);

        };


        const icone =
            local.tipo === "Ecoponto"

                ? "bi-recycle"

                : "bi-building";


        card.innerHTML = `

            <div class="local-card-icone">

                <i class="bi ${icone}"></i>

            </div>


            <div class="local-card-conteudo">

                <span class="local-card-tipo">

                    ${local.tipo}

                </span>


                <h3>
                    ${local.nome}
                </h3>


                <p>

                    <i class="bi bi-geo-alt"></i>

                    ${local.cidade} - SP

                </p>

            </div>


            <i class="bi bi-chevron-right local-card-seta"></i>

        `;


        container.appendChild(card);

    });

}


function aplicarFiltros() {


    const resultados =
        locais.filter(function(local) {



            const correspondePesquisa =

                local.nome
                    .toLowerCase()
                    .includes(textoPesquisa)

                ||

                local.cidade
                    .toLowerCase()
                    .includes(textoPesquisa)

                ||

                local.tipo
                    .toLowerCase()
                    .includes(textoPesquisa);


            if (!correspondePesquisa) {

                return false;

            }



            if (

                tipoSelecionado !== "todos"

                &&

                local.tipo !== tipoSelecionado

            ) {

                return false;

            }


            const materiaisSelecionados =

                Array.from(

                    document.querySelectorAll(
                        ".checkbox-filtro input:checked"
                    )

                ).map(function(input) {

                    return input.value;

                });


            if (
                materiaisSelecionados.length > 0
            ) {


                const possuiMaterial =

                    materiaisSelecionados.some(
                        function(material) {

                            return local.materiais.includes(
                                material
                            );

                        }
                    );


                if (!possuiMaterial) {

                    return false;

                }

            }


            return true;

        });


    criarListaLocais(resultados);


    atualizarMarcadores(resultados);

}


function atualizarMarcadores(resultados) {


    locais.forEach(function(local) {


        if (!local.marcador) {

            return;

        }


        const aparece =
            resultados.includes(local);


        if (aparece) {

            if (!map.hasLayer(local.marcador)) {

                local.marcador.addTo(map);

            }

        } else {

            if (map.hasLayer(local.marcador)) {

                map.removeLayer(local.marcador);

            }

        }

    });

}


const campoPesquisa =
    document.getElementById("pesquisa");


campoPesquisa.addEventListener(
    "input",
    function() {


        textoPesquisa =
            campoPesquisa.value
                .toLowerCase()
                .trim();


        aplicarFiltros();

    }
);


function filtrarTipo(tipo) {


    tipoSelecionado = tipo;



    document
        .querySelectorAll(".filtro-opcao")
        .forEach(function(botao) {


            botao.classList.remove(
                "ativo"
            );


            if (
                botao.dataset.tipo === tipo
            ) {

                botao.classList.add(
                    "ativo"
                );

            }

        });


    aplicarFiltros();

}


function limparFiltros() {


    tipoSelecionado =
        "todos";


    textoPesquisa =
        "";


    campoPesquisa.value =
        "";


    document
        .querySelectorAll(
            ".checkbox-filtro input"
        )
        .forEach(function(input) {

            input.checked = false;

        });


    filtrarTipo("todos");

}



function abrirFiltros() {


    const painel =
        document.getElementById(
            "painel-filtros"
        );


    painel.classList.add(
        "aberto"
    );

}


function fecharFiltros() {


    const painel =
        document.getElementById(
            "painel-filtros"
        );


    painel.classList.remove(
        "aberto"
    );

}


function mostrarLocal(id) {


    const local =
        locais.find(function(item) {

            return item.id === id;

        });


    if (!local) {

        return;

    }


    document.getElementById(
        "tipo-local-detalhes"
    ).textContent = local.tipo;



    document.getElementById(
        "nome-local"
    ).textContent = local.nome;



    document.getElementById(
        "endereco-local"
    ).textContent = local.endereco;



    document.getElementById(
        "horario-local"
    ).textContent = local.horario;



    const listaMateriais =
        document.getElementById(
            "materiais-local"
        );


    listaMateriais.innerHTML = "";


    local.materiais.forEach(
        function(material) {


            const item =
                document.createElement("li");


            item.innerHTML = `

                <i class="bi bi-check-circle-fill"></i>

                ${material}

            `;


            listaMateriais.appendChild(
                item
            );

        }
    );



    const botaoComoChegar =
        document.getElementById(
            "btn-como-chegar"
        );


    botaoComoChegar.onclick =
        function() {


            const url =

                `https://www.google.com/maps/dir/?api=1&destination=${local.latitude},${local.longitude}`;


            window.open(
                url,
                "_blank"
            );

        };



    document.getElementById(
        "lista-container"
    ).style.display = "none";


    document.getElementById(
        "detalhes-local"
    ).style.display = "block";



    fecharFiltros();



    map.setView(

        [
            local.latitude,
            local.longitude
        ],

        15

    );



    if (local.marcador) {

        local.marcador.openPopup();

    }

}

function voltarLista() {


    document.getElementById(
        "detalhes-local"
    ).style.display = "none";


    document.getElementById(
        "lista-container"
    ).style.display = "block";


    map.setView(

        [-24.093, -46.620],

        11

    );


    aplicarFiltros();

}


criarListaLocais(locais);