<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avaliador de Manutenção | AutoTech</title>

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


    <!-- ==================== AVALIADOR ==================== -->

    <section class="avaliador">

        <h2>Avaliador de Manutenção</h2>


        <form method="POST" class="formulario">


            <label>Tipo de veículo:</label>

            <select name="veiculo" required>

                <option value="">Selecione</option>

                <option value="Carro">Carro</option>

                <option value="Motocicleta">Motocicleta</option>

            </select>


            <label>Quilometragem atual do veículo:</label>

            <input
                type="number"
                name="quilometragem"
                step="0.01"
                min="0"
                required
            >


            <label>Quilometragem da última manutenção:</label>

            <input
                type="number"
                name="manutencao"
                step="0.01"
                min="0"
                required
            >


            <button type="submit" class="botao">
                Calcular manutenção
            </button>


        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $veiculo = $_POST["veiculo"];

            $quilometragem = $_POST["quilometragem"];

            $manutencao = $_POST["manutencao"];


            /* ==================== CÁLCULO ==================== */

            $quilometragem_percorrida = $quilometragem - $manutencao;


            /* ==================== SITUAÇÃO ==================== */

            $situacao = "";


            if ($veiculo == "Carro") {

                if ($quilometragem_percorrida <= 5000) {

                    $situacao = "Manutenção em dia";

                } elseif ($quilometragem_percorrida <= 10000) {

                    $situacao = "Manutenção recomendada";

                } else {

                    $situacao = "Manutenção necessária";

                }


            } elseif ($veiculo == "Motocicleta") {

                if ($quilometragem_percorrida <= 3000) {

                    $situacao = "Manutenção em dia";

                } elseif ($quilometragem_percorrida <= 6000) {

                    $situacao = "Manutenção recomendada";

                } else {

                    $situacao = "Manutenção necessária";

                }

            }


            /* ==================== RESULTADO ==================== */

            echo '<div class="resultado">';

            echo '<h2>Resultado da manutenção</h2>';

            echo '<p><strong>Tipo de veículo:</strong> ' .
                $veiculo .
                '</p>';

            echo '<p><strong>Quilometragem atual:</strong> ' .
                number_format($quilometragem, 2, ",", ".") .
                ' km</p>';

            echo '<p><strong>Última manutenção:</strong> ' .
                number_format($manutencao, 2, ",", ".") .
                ' km</p>';

            echo '<p><strong>Quilômetros percorridos:</strong> ' .
                number_format($quilometragem_percorrida, 2, ",", ".") .
                ' km</p>';

            echo '<div class="situacao">';

            echo 'Situação: ' . $situacao;

            echo '</div>';

            echo '</div>';

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
