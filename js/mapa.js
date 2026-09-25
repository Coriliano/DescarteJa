const limite = L.latLngBounds(
    [-24.25, -46.95],
    [-23.90, -46.30]
);

const map = L.map("map", {
    maxBounds: limite,
    maxBoundsViscosity: 1.0,
    minZoom: 10,
    maxZoom: 16
}).setView([-24.093, -46.620], 11);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const locais = [
    {
        id: 0,
        nome: "Ecoponto Real",
        tipo: "Ecoponto",
        cidade: "Praia Grande",
        endereco: "R. Lilás, 417 - Real, Praia Grande - SP, 11708-140",
        horario: "Segunda a sexta, das 8h às 17h, Sábado, das 9h às 15h",
        latitude: -24.06530196376065,
        longitude: -46.56525743396994,
        materiais: [
            "Pilhas",
            "Cabos",
            "Eletrodomésticos"
        ]
    },
    {
        id: 1,
        nome: "Fundação Settaport",
        tipo: "Empresa",
        cidade: "Santos",
        endereco: "Av. Conselheiro Nébias, 85 - Paquetá, Santos - SP, 11015-001",
        horario: "Segunda a sexta, das 8:30 às 15h",
        latitude: -23.936582285062922,
        longitude: -46.32083134027998,
        materiais: [
            "Computadores",
            "Televisores",
            "Celulares",
            "Eletrodomésticos"
        ]
    },
    {
        id: 2,
        nome: "Ecoponto Verde mar",
        tipo: "Ecoponto",
        cidade: "Itanhaém",
        endereco: "Av. Marginal, 8003 - Santa Terezinha, Itanhaém - SP, 11740-000",
        horario: "Segunda a sexta-feira, das 7h às 16h. Sábados, domingos e feriados, das 7h às 12h",
        latitude: -24.14666143747172,
        longitude: -46.72593444289281,
        materiais: [
            "Computadores",
            "Cabos",
            "Eletrodomésticos"
        ]
    }
];

let tiposelec = "todos";
let textopesquisa = "";

locais.forEach(function(local) {
    const marcador = L.marker([
        local.latitude,
        local.longitude
    ]).addTo(map);

    marcador.bindPopup(`
        <div class="popup-local">
            <strong>${local.nome}</strong>
            <span>${local.tipo}</span>
            <button onclick="mostrarlocal(${local.id})">
                Ver detalhes
            </button>
        </div>
    `);

    local.marcador = marcador;
});

function listalocais(lista) {
    const container = document.getElementById("lista-locais");

    container.innerHTML = "";

    document.getElementById("quantidade-resultados").textContent =
        lista.length === 1
            ? "1 local encontrado"
            : `${lista.length} locais encontrados`;

    if (lista.length === 0) {
        container.innerHTML = `
            <div class="sem-resultados">
                <i class="bi bi-search"></i>
                <h3>Nenhum local encontrado</h3>
                <p>
                    Tente pesquisar outra cidade
                    ou alterar os filtros.
                </p>
            </div>
        `;

        return;
    }

    lista.forEach(function(local) {
        const card = document.createElement("div");

        card.className = "local-card";

        card.onclick = function() {
            mostrarlocal(local.id);
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

function aplicarfiltros() {
    const resultados = locais.filter(function(local) {
        const corresponde =
            local.nome
                .toLowerCase()
                .includes(textopesquisa) ||
            local.cidade
                .toLowerCase()
                .includes(textopesquisa) ||
            local.tipo
                .toLowerCase()
                .includes(textopesquisa);

        if (!corresponde) {
            return false;
        }

        if (
            tiposelec !== "todos" &&
            local.tipo !== tiposelec
        ) {
            return false;
        }

        const materiaisselec = Array.from(
            document.querySelectorAll(
                ".checkbox-filtro input:checked"
            )
        ).map(function(input) {
            return input.value;
        });

        if (materiaisselec.length > 0) {
            const possui = materiaisselec.some(
                function(material) {
                    return local.materiais.includes(material);
                }
            );

            if (!possui) {
                return false;
            }
        }

        return true;
    });

    listalocais(resultados);
    atualizarmarcadores(resultados);
}

function atualizarmarcadores(resultados) {
    locais.forEach(function(local) {
        if (!local.marcador) {
            return;
        }

        const aparece = resultados.includes(local);

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

const campopesquisa = document.getElementById("pesquisa");

campopesquisa.addEventListener("input", function() {
    textopesquisa = campopesquisa.value
        .toLowerCase()
        .trim();

    aplicarfiltros();
});

function filtrartipo(tipo) {
    tiposelec = tipo;

    document
        .querySelectorAll(".filtro-opcao")
        .forEach(function(botao) {
            botao.classList.remove("ativo");

            if (botao.dataset.tipo === tipo) {
                botao.classList.add("ativo");
            }
        });

    aplicarfiltros();
}

function limparFiltros() {
    tiposelec = "todos";
    textopesquisa = "";
    campopesquisa.value = "";

    document
        .querySelectorAll(".checkbox-filtro input")
        .forEach(function(input) {
            input.checked = false;
        });

    filtrartipo("todos");
}

function abrirFiltros() {
    const painel = document.getElementById("painel-filtros");

    painel.classList.add("aberto");
}

function fecharFiltros() {
    const painel = document.getElementById("painel-filtros");

    painel.classList.remove("aberto");
}

function mostrarlocal(id) {
    const local = locais.find(function(item) {
        return item.id === id;
    });

    if (!local) {
        return;
    }

    document.getElementById("tipo-local-detalhes").textContent =
        local.tipo;

    document.getElementById("nome-local").textContent =
        local.nome;

    document.getElementById("endereco-local").textContent =
        local.endereco;

    document.getElementById("horario-local").textContent =
        local.horario;

    const listaMateriais =
        document.getElementById("materiais-local");

    listaMateriais.innerHTML = "";

    local.materiais.forEach(function(material) {
        const item = document.createElement("li");

        item.innerHTML = `
            <i class="bi bi-check-circle-fill"></i>
            ${material}
        `;

        listaMateriais.appendChild(item);
    });

    const comochegar =
        document.getElementById("btn-como-chegar");

    comochegar.onclick = function() {
        const url =
            `https://www.google.com/maps/dir/?api=1&destination=${local.latitude},${local.longitude}`;

        window.open(url, "_blank");
    };

    document.getElementById("lista-container").style.display =
        "none";

    document.getElementById("detalhes-local").style.display =
        "block";

    fecharFiltros();

    map.setView(
        [local.latitude, local.longitude],
        15
    );

    if (local.marcador) {
        local.marcador.openPopup();
    }
}

function voltarLista() {
    document.getElementById("detalhes-local").style.display =
        "none";

    document.getElementById("lista-container").style.display =
        "block";

    map.setView(
        [-24.093, -46.620],
        11
    );

    aplicarfiltros();
}

listalocais(locais);