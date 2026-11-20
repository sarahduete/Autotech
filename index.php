
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoTech | Tecnologia Automotiva</title>

    <meta name="description" content="AutoTech: ferramentas digitais para facilitar o dia a dia da oficina mecânica.">

    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="topo">
        <a href="index.php" class="logo">
            <h1>Auto<span>Tech</span></h1>
            <p>TECNOLOGIA AUTOMOTIVA</p>
        </a>

        <nav class="menu">
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#ferramentas">Ferramentas</a>
            <a href="#contato">Contato</a>
        </nav>

        <a href="#ferramentas" class="topo-botao">
            Acessar portal
        </a>
    </header>

    <main>

        <!-- BANNER PRINCIPAL -->
        <section class="banner" id="inicio">

            <img
                src="imagens/carro-autotech.jpg"
                alt="Carro esportivo em destaque"
                class="banner-imagem"
            >

            <div class="banner-sombra"></div>

            <div class="banner-conteudo">

                <span class="etiqueta">
                    <span class="ponto"></span>
                    SOLUÇÕES PARA OFICINAS
                </span>

                <h2>
                    Mais tecnologia.
                    <span>Mais eficiência.</span>
                </h2>

                <p>
                    Ferramentas digitais para simplificar cálculos,
                    organizar informações e facilitar a rotina
                    de uma oficina mecânica.
                </p>

                <div class="banner-acoes">
                    <a href="#ferramentas" class="botao-principal">
                        Explorar ferramentas
                    </a>

                    <a href="#sobre" class="botao-secundario">
                        Conhecer o portal →
                    </a>
                </div>

            </div>

            <div class="banner-rodape">
                <span>TECNOLOGIA APLICADA AO DIA A DIA</span>
                <span>AUTOTECH © 2026</span>
            </div>

        </section>

        <!-- DIFERENCIAIS -->
        <section class="diferenciais">

            <article class="diferencial">
                <span class="diferencial-numero">01</span>
                <div>
                    <h3>Praticidade</h3>
                    <p>Processos mais simples e rápidos.</p>
                </div>
            </article>

            <article class="diferencial">
                <span class="diferencial-numero">02</span>
                <div>
                    <h3>Organização</h3>
                    <p>Informações acessíveis em um só lugar.</p>
                </div>
            </article>

            <article class="diferencial">
                <span class="diferencial-numero">03</span>
                <div>
                    <h3>Eficiência</h3>
                    <p>Recursos para apoiar o atendimento.</p>
                </div>
            </article>

        </section>

        <!-- SOBRE -->
        <section class="sobre" id="sobre">

            <div class="sobre-imagem">
                <img
                    src="imagens/oficina-autotech.jpg"
                    alt="Ambiente de oficina mecânica moderna"
                >

                <div class="sobre-legenda">
                    <span>01 / AUTOTECH</span>
                    <p>Tecnologia que acompanha o seu trabalho.</p>
                </div>
            </div>

            <div class="sobre-conteudo">

                <span class="secao-etiqueta">CONHEÇA A AUTOTECH</span>

                <h2>
                    A tecnologia como aliada da
                    <span>oficina mecânica.</span>
                </h2>

                <p>
                    O AutoTech é um portal de ferramentas digitais
                    desenvolvido para auxiliar nas atividades
                    do dia a dia de uma oficina mecânica.
                </p>

                <p>
                    Com recursos para cálculos, estimativas e
                    avaliações, o portal reúne soluções práticas
                    em um ambiente simples e acessível.
                </p>

                <a href="#ferramentas" class="link-vermelho">
                    Conheça nossas ferramentas →
                </a>

            </div>

        </section>

        <!-- FERRAMENTAS -->
        <section class="ferramentas" id="ferramentas">

            <div class="ferramentas-topo">

                <div>
                    <span class="secao-etiqueta">RECURSOS DIGITAIS</span>

                    <h2>
                        Ferramentas para
                        <span>sua oficina.</span>
                    </h2>

                    <p>
                        Escolha uma ferramenta e encontre o recurso
                        ideal para cada necessidade.
                    </p>
                </div>

                <span class="ferramentas-contador">
                    05 FERRAMENTAS DISPONÍVEIS
                </span>

            </div>

            <div class="ferramentas-grid">

                <!-- ORÇAMENTO -->
                <article class="card">
                    <div class="card-topo">
                        <span class="card-icone">R$</span>
                        <span class="card-numero">01</span>
                    </div>

                    <h3>Calculadora de Orçamento</h3>

                    <p>
                        Calcule os valores de peças e mão de obra
                        para montar orçamentos com praticidade.
                    </p>

                    <a href="ferramentas/calculadora-orcamento.php">
                        Acessar ferramenta <span>↗</span>
                    </a>
                </article>

                <!-- PNEUS -->
                <article class="card">
                    <div class="card-topo">
                        <span class="card-icone">◉</span>
                        <span class="card-numero">02</span>
                    </div>

                    <h3>Calculadora de Pneus</h3>

                    <p>
                        Calcule os valores de troca, montagem
                        e balanceamento dos pneus.
                    </p>

                    <a href="ferramentas/troca-pneus.php">
                        Acessar ferramenta <span>↗</span>
                    </a>
                </article>

                <!-- COMBUSTÍVEL -->
                <article class="card">
                    <div class="card-topo">
                        <span class="card-icone">⛽</span>
                        <span class="card-numero">03</span>
                    </div>

                    <h3>Calculadora de Combustível</h3>

                    <p>
                        Analise o consumo do veículo e estime
                        os custos com combustível.
                    </p>

                    <a href="ferramentas/calculadora-combustivel.php">
                        Acessar ferramenta <span>↗</span>
                    </a>
                </article>

                <!-- MANUTENÇÃO -->
                <article class="card">
                    <div class="card-topo">
                        <span class="card-icone">⚙</span>
                        <span class="card-numero">04</span>
                    </div>

                    <h3>Avaliador de Manutenção</h3>

                    <p>
                        Consulte informações para avaliar
                        a situação da manutenção do veículo.
                    </p>

                    <a href="ferramentas/avaliador-manutencao.php">
                        Acessar ferramenta <span>↗</span>
                    </a>
                </article>

                <!-- VIAGEM -->
                <article class="card">
                    <div class="card-topo">
                        <span class="card-icone">↗</span>
                        <span class="card-numero">05</span>
                    </div>

                    <h3>Simulador de Viagem</h3>

                    <p>
                        Estime a distância, o consumo e os custos
                        de combustível de uma viagem.
                    </p>

                    <a href="ferramentas/simulador-viagem.php">
                        Acessar ferramenta <span>↗</span>
                    </a>
                </article>

            </div>

        </section>

        <!-- CHAMADA FINAL -->
        <section class="chamada">
            <div>
                <span class="secao-etiqueta">AUTOTECH</span>

                <h2>
                    Sua oficina merece
                    <span>soluções inteligentes.</span>
                </h2>

                <p>
                    Explore os recursos disponíveis e torne
                    suas atividades mais práticas.
                </p>
            </div>

            <a href="#ferramentas" class="botao-principal">
                Começar agora →
            </a>
        </section>

    </main>

    <!-- RODAPÉ -->
    <footer class="rodape" id="contato">

        <div class="rodape-conteudo">

            <div class="rodape-marca">
                <h2>Auto<span>Tech</span></h2>
                <p>TECNOLOGIA AUTOMOTIVA</p>

                <span>
                    Soluções digitais para o dia a dia
                    da oficina mecânica.
                </span>
            </div>

            <div class="rodape-coluna">
                <h3>Navegação</h3>
                <a href="#inicio">Início</a>
                <a href="#sobre">Sobre</a>
                <a href="#ferramentas">Ferramentas</a>
            </div>

            <div class="rodape-coluna">
                <h3>Ferramentas</h3>
                <a href="ferramentas/calculadora-orcamento.php">Orçamento</a>
                <a href="ferramentas/troca-pneus.php">Pneus</a>
                <a href="ferramentas/calculadora-combustivel.php">Combustível</a>
            </div>

            <div class="rodape-coluna">
                <h3>Localização</h3>
                <p>Santana de Parnaíba - SP</p>
                <p>Qualidade em cada quilômetro.</p>
            </div>

        </div>

        <div class="rodape-final">
            <span>© 2026 AutoTech. Todos os direitos reservados.</span>
            <span>DESENVOLVIDO COM TECNOLOGIA E INOVAÇÃO.</span>
        </div>

    </footer>

</body>
</html>
