<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora de Combustível</title>

    <link rel="stylesheet" href="../CSS/ferramentas.css">
</head>

<body>


    <!-- ==================== TOPO ==================== -->

    <header class="topo">

        <div class="logo">

            <h1>Auto<span>Tech</span></h1>

            <p>OFICINA MECÂNICA</p>

        </div>


        <div class="informacao">

            <h3>PORTAL DE FERRAMENTAS</h3>

            <p>Soluções rápidas para o dia a dia da oficina</p>

        </div>

    </header>


    <!-- ==================== MENU ==================== -->

    <nav class="menu">

        <a href="../index.php">⌂ Início</a>

        <a href="calculadora-orcamento.php">Orçamento</a>

        <a href="troca-pneus.php">Pneus</a>

        <a href="calculadora-combustivel.php">Combustível</a>

        <a href="avaliador-manutencao.php">Serviço</a>

        <a href="simulador-viagem.php">Viagem</a>

    </nav>


    <!-- ==================== CALCULADORA ==================== -->

    <section class="calculadora">

        <h2>Calculadora de Combustível</h2>


        <form method="POST" class="formulario">

            <label>Distância percorrida:</label>

            <input
                type="number"
                name="distancia"
                step="0.01"
                required
            >


            <label>Quantidade de litros consumidos:</label>

            <input
                type="number"
                name="litros"
                step="0.01"
                required
            >


            <label>Preço do litro do combustível:</label>

            <input
                type="number"
                name="custo_combustivel"
                step="0.01"
                required
            >


            <button type="submit" class="botao">

                Calcular consumo

            </button>

        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $distancia = $_POST["distancia"];

            $litros = $_POST["litros"];

            $custo_combustivel = $_POST["custo_combustivel"];


            // ==================== CÁLCULOS ====================

            // Consumo médio em km/L
            $consumo_medio = $distancia / $litros;


            // Custo total do combustível
            $custo_total = $litros * $custo_combustivel;


            // Custo de combustível por quilômetro
            $custo_km = $custo_total / $distancia;


            // ==================== CLASSIFICAÇÃO ====================

            if ($consumo_medio < 8) {

                $classificacao = "Alto consumo";

                $classe = "vermelho";

            } elseif ($consumo_medio < 12) {

                $classificacao = "Consumo moderado";

                $classe = "amarelo";

            } elseif ($consumo_medio <= 16) {

                $classificacao = "Bom consumo";

                $classe = "verde";

            } else {

                $classificacao = "Excelente consumo";

                $classe = "azul";

            }

        ?>


            <!-- ==================== CLASSIFICAÇÃO ==================== -->

            <div class="classificacao">

                <div class="titulo-classificacao">

                    ⛽ CLASSIFICAÇÃO DO CONSUMO DE COMBUSTÍVEL

                </div>


                <div class="linha-classificacao <?php echo $classe; ?>">

                    <span>

                        <?php
                        echo number_format($consumo_medio, 2, ",", ".");
                        ?>

                        km/L

                    </span>


                    <span>

                        <?php
                        echo $classificacao;
                        ?>

                        ⛽

                    </span>

                </div>


                <div class="rodape-classificacao">

                    Quanto maior o consumo, mais econômico é o veículo.

                </div>

            </div>


            <!-- ==================== RESUMO ==================== -->

            <div class="resultado">

                <h2>Resumo do consumo</h2>


                <p>

                    <strong>Distância:</strong>

                    <?php
                    echo $distancia;
                    ?>

                    km

                </p>


                <p>

                    <strong>Litros consumidos:</strong>

                    <?php
                    echo $litros;
                    ?>

                    L

                </p>


                <p>

                    <strong>Consumo médio:</strong>

                    <?php
                    echo number_format($consumo_medio, 2, ",", ".");
                    ?>

                    km/L

                </p>


                <p>

                    <strong>Custo total:</strong>

                    R$

                    <?php
                    echo number_format($custo_total, 2, ",", ".");
                    ?>

                </p>


                <p class="total">

                    <strong>

                        Custo por km: R$

                        <?php
                        echo number_format($custo_km, 2, ",", ".");
                        ?>

                    </strong>

                </p>

            </div>


        <?php

        }

        ?>

    </section>


    <!-- ==================== RODAPÉ ==================== -->

    <footer class="rodape">

        <h3>
            Auto<span style="color:#e52525;">Tech</span>
        </h3>

        <p>
            Portal de ferramentas para oficina mecânica.
        </p>

        <p>
            © 2026 AutoTech - Portal de Ferramentas
        </p>

    </footer>


</body>

</html>
