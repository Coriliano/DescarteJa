<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - DescarteJá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php include "../../includes/navbar.php"; ?>

<main class="blog-pagina">

    <section class="blog-cabecalho">

        <div class="blog-cabecalho-conteudo">

            <h1>Blog DescarteJá</h1>

            <p>
                Descubra informações, dicas e conteúdos sobre
                lixo eletrônico, reciclagem e descarte correto.
            </p>

        <div class="blog-pesquisa">

            <input
                type="text"
                id="campo-pesquisa"
                placeholder="Pesquisar artigo...">

            <button type="button" id="botao-pesquisa">
                Pesquisar
             </button>

                </div>
        </div>

    </section>

    <section class="blog-conteudo">


<div class="blog-grid" id="blog-grid">

            <article class="blog-card">

                <img
                    src="../../img/elixo.png"
                    alt="Descarte de lixo eletrônico">

                <div class="blog-card-conteudo">

                    <h2>
                        O que é lixo eletrônico?
                    </h2>

                    <p>
                        Entenda o que caracteriza o lixo eletrônico
                        e por que seu descarte correto é importante.
                    </p>

                    <div class="blog-card-final">

                        <span>
                            xx/xx/xxxx
                        </span>

                        <a href="post.php?id=1" class="btn btn-card">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

            <article class="blog-card">

                <img
                    src="../../img/comodescartar.png"
                    alt="Descarte correto de eletrônicos">

                <div class="blog-card-conteudo">

                    <h2>
                        Como descartar eletrônicos corretamente?
                    </h2>

                    <p>
                        Saiba quais cuidados devem ser tomados antes
                        de levar seus aparelhos eletrônicos para o descarte.
                    </p>

                    <div class="blog-card-final">

                        <span>
                            xx/xx/xxxx
                        </span>

                        <a href="post.php?id=2" class="btn btn-card">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

            <article class="blog-card">

                <img
                    src="../../img/reciclar.png"
                    alt="Reciclagem de eletrônicos">

                <div class="blog-card-conteudo">

                    <h2>
                        Por que reciclar aparelhos eletrônicos?
                    </h2>

                    <p>
                        Descubra como a reciclagem pode contribuir
                        para a redução dos impactos ambientais.
                    </p>

                    <div class="blog-card-final">

                        <span>
                            xx/xx/xxxx
                        </span>

                        <a href="post.php?id=3" class="btn btn-card">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

            <article class="blog-card">

                <img
                    src="../../img/celular.png"
                    alt="Celular antigo">

                <div class="blog-card-conteudo">

                    <h2>
                        O que fazer com celulares antigos?
                    </h2>

                    <p>
                        Veja algumas orientações para dar uma destinação
                        adequada aos celulares que não são mais utilizados.
                    </p>

                    <div class="blog-card-final">

                        <span>
                            xx/xx/xxxx
                        </span>

                        <a href="post.php?id=4" class="btn btn-card">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>

    </section>

</main>

<?php include "../../includes/footer.php"; ?>

<script>
const campoPesquisa = document.getElementById("campo-pesquisa");
const cards = document.querySelectorAll(".blog-card");

function pesquisarArtigos() {
    const pesquisa = campoPesquisa.value.toLowerCase().trim();

    cards.forEach(card => {
        const titulo = card.querySelector("h2").textContent.toLowerCase();

        if (titulo.includes(pesquisa)) {
            card.style.display = "flex";
        } else {
            card.style.display = "none";
        }
    });
}

campoPesquisa.addEventListener("input", pesquisarArtigos);
</script>

</body>

</html>