<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Simulador de Viagem</title>

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

        <a href="avaliador-manutenção.php">Serviço</a>

        <a href="simulador-viagem.php">Viagem</a>

    </nav>


    <!-- ==================== SIMULADOR ==================== -->

    <section class="simulador">

        <h2>Simulador de Viagem</h2>


        <form method="POST" class="formulario">


            <label>Distância da viagem:</label>

            <input
                type="number"
                name="distancia"
                step="0.01"
                min="0"
                required
            >


            <label>Consumo médio do veículo em km/L:</label>

            <input
                type="number"
                name="km_l"
                step="0.01"
                min="0"
                required
            >


            <label>Preço do combustível:</label>

            <input
                type="number"
                name="combustivel"
                step="0.01"
                min="0"
                required
            >


            <label>Tipo de viagem:</label>

            <select name="tipo_viagem" required>

                <option value="">Selecione</option>

                <option value="ida">Somente ida</option>

                <option value="ida_volta">Ida e volta</option>

            </select>


            <button type="submit" class="botao">

                Calcular viagem

            </button>

        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $distancia = $_POST["distancia"];

            $km_l = $_POST["km_l"];

            $combustivel = $_POST["combustivel"];

            $tipo_viagem = $_POST["tipo_viagem"];


            /* ==================== TIPO DE VIAGEM ==================== */

            if ($tipo_viagem == "ida_volta") {

                $distancia = $distancia * 2;

                $tipo = "Ida e volta";

            } else {

                $tipo = "Somente ida";

            }


            /* ==================== CÁLCULOS ==================== */

            $total_litro = $distancia / $km_l;

            $custo_estimado = $total_litro * $combustivel;


            /* ==================== RESULTADO ==================== */

            echo '<div class="resultado">';

            echo '<h2>Resultado da viagem</h2>';

            echo '<p>🛣️ <strong>Tipo de viagem:</strong> ' .
                $tipo .
                '</p>';

            echo '<p>🚗 <strong>Distância:</strong> ' .
                number_format($distancia, 2, ",", ".") .
                ' km</p>';

            echo '<p>⛽ <strong>Consumo:</strong> ' .
                number_format($km_l, 2, ",", ".") .
                ' km/L</p>';

            echo '<p>💧 <strong>Combustível necessário:</strong> ' .
                number_format($total_litro, 2, ",", ".") .
                ' L</p>';

            echo '<p class="total">💰 <strong>Custo estimado: R$ ' .
                number_format($custo_estimado, 2, ",", ".") .
                '</strong></p>';

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
