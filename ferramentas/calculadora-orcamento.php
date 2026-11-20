<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Orçamento</title>

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

        <h2>Calculadora de Orçamento</h2>

        <form method="POST" class="formulario">

            <label>Descrição do serviço:</label>

            <input type="text" name="servico" required>


            <label>Valor das peças:</label>

            <input type="number" name="pecas" step="0.01" required>


            <label>Valor da mão de obra:</label>

            <input type="number" name="mao_obra" step="0.01" required>


            <button type="submit" class="botao">
                Calcular orçamento
            </button>

        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $servico = $_POST["servico"];
            $pecas = $_POST["pecas"];
            $mao_obra = $_POST["mao_obra"];

            $total = $pecas + $mao_obra;

            echo '<div class="resultado">';

            echo "<h2>Resumo do orçamento</h2>";

            echo "<p><strong>Serviço:</strong> " . $servico . "</p>";

            echo "<p><strong>Peças:</strong> R$ " .
                number_format($pecas, 2, ",", ".") . "</p>";

            echo "<p><strong>Mão de obra:</strong> R$ " .
                number_format($mao_obra, 2, ",", ".") . "</p>";

            echo '<p class="total"><strong>Total: R$ ' .
                number_format($total, 2, ",", ".") .
                '</strong></p>';


            if ($total > 1000) {

                echo '<div class="alerta">
                    Orçamento de alto valor. Consulte as condições de pagamento.
                </div>';

            }

            echo '</div>';
        }

        ?>

    </section>


    <!-- ==================== RODAPÉ ==================== -->

    <footer class="rodape">

        <h3>Auto<span style="color:#e52525;">Tech</span></h3>

        <p>Portal de ferramentas para oficina mecânica.</p>

        <p>© 2026 AutoTech - Portal de Ferramentas</p>

    </footer>

</body>

</html>
