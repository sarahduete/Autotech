<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Troca de Pneus</title>

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


    <!-- ==================== TROCA DE PNEUS ==================== -->

    <section class="calculadora">

        <h2>Calculadora de Troca de Pneus</h2>


        <form method="POST" class="formulario">

            <label>Marca/Modelo do pneu:</label>

            <input type="text" name="marca_modelo" required >


            <label>Valor de cada pneu:</label>

            <input type="number" name="valor_pneu" step="0.01"required>


            <label>Quantidade de pneus:</label>

            <input type="number" name="quantidade" min="1" step="1" required>


            <label>Valor da montagem por pneu:</label>

            <input type="number" name="montagem" step="0.01"required>


            <label>Valor do balanceamento por pneu:</label>

            <input type="number"name="balanceamento"step="0.01"required>


            <button type="submit" class="botao">

                Calcular troca

            </button>

        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $marca_modelo = $_POST["marca_modelo"];

            $valor_pneu = $_POST["valor_pneu"];

            $quantidade = $_POST["quantidade"];

            $montagem = $_POST["montagem"];

            $balanceamento = $_POST["balanceamento"];


            // ==================== CÁLCULOS ====================

            $total_pneus = $valor_pneu * $quantidade;

            $total_montagem = $montagem * $quantidade;

            $total_balanceamento = $balanceamento * $quantidade;

            $total = $total_pneus + $total_montagem + $total_balanceamento;


        ?>


            <!-- ==================== RESULTADO ==================== -->

            <div class="resultado">

                <h2>Resumo da troca de pneus</h2>


                <p>

                    <strong>Marca/Modelo:</strong>

                    <?php
                    echo $marca_modelo;
                    ?>

                </p>


                <p>

                    <strong>Quantidade:</strong>

                    <?php
                    echo $quantidade;
                    ?>

                </p>


                <p>

                    <strong>Total dos pneus:</strong>

                    R$

                    <?php
                    echo number_format($total_pneus, 2, ",", ".");
                    ?>

                </p>


                <p>

                    <strong>Total da montagem:</strong>

                    R$

                    <?php
                    echo number_format($total_montagem, 2, ",", ".");
                    ?>

                </p>


                <p>

                    <strong>Total do balanceamento:</strong>

                    R$

                    <?php
                    echo number_format($total_balanceamento, 2, ",", ".");
                    ?>

                </p>


                <p class="total">

                    <strong>

                        Total: R$

                        <?php
                        echo number_format($total, 2, ",", ".");
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
