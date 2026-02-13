<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área</title>
</head>
<body>

    <h1>Calculadora de Área</h1>

    <div>
        <h2>Círculo</h2>
        <form method="post" action="">
            <label>Raio (r):</label>
            <input type="number" name="raio" required>
            <input type="submit" name="calc_circulo" value="Calcular">
        </form>
        <?php
        if (isset($_POST['calc_circulo']) && !empty($_POST['raio']) && ($_POST['raio'] >= 0)) {
            $raio = $_POST['raio'];
            $area = pi() * pow($raio, 2); 
            echo "<div class='resultado'>\n\nÁrea: " . number_format($area, 2, ',', '.') . "</div>";
        }
        else if (isset($_POST['calc_circulo']) && ($_POST['raio'] < 0)) {
            echo "Informe um valor válido";
        }
        ?>
    </div>

    <div>
        <h2>Triângulo</h2>
        <form action="" method="post">
            <label>Base (b)</label>
            <input type="number" name="base" required>
            <p></p>
            <label>Altura (h)</label>
            <input type="number" name="altura" required>
            <input type="submit" name="calc_triangulo" value="Calcular">
        </form>
        <?php
            if (isset($_POST['calc_triangulo']) && !empty($_POST['base']) && !empty($_POST['altura']) && ($_POST['base'] >= 0) && ($_POST['altura'] >= 0) ) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura / 2;
                echo "<div class='resultado'>Área: " . number_format($area, 2, ',', '.') . "</div>";
            }

            else if (isset($_POST['calc_triangulo']) && ($_POST['base'] < 0) || isset($_POST['calc_triangulo']) && ($_POST['altura'] < 0)) {
                echo "Informe um valor válido";
            }
        ?>
    </div>

    <div>
        <h2>Quadrado</h2>
        <form method="post" action="">
            <label>Lado (l):</label>
            <input type="number" name="lado" required>
            <input type="submit" name="calc_quadrado" value="Calcular">
        </form>
        <?php
        if (isset($_POST['calc_quadrado']) && !empty($_POST['lado']) && ($_POST['lado'] >= 0)) {
            $lado = $_POST['lado'];
            $area = pow($lado, 2);
            echo "<div class='resultado'>Área: " . number_format($area, 2, ',', '.') . "</div>";
        }

        else if (isset($_POST['calc_quadrado']) && ($_POST['lado'] < 0)) {
            echo "Informe um valor válido";
        }
        ?>
    </div>

    <div>
        <h2>Retângulo</h2>
        <form action="" method="post">
            <label>Base (b)</label>
            <input type="number" name="base" required>
            <p></p>
            <label>Altura (h)</label>
            <input type="number" name="altura" required>
            <input type="submit" name="calc_retangulo" value="Calcular">
        </form>
        <?php
            if (isset($_POST['calc_retangulo']) && !empty($_POST['base']) && !empty($_POST['altura']) && ($_POST['base'] >= 0) && ($_POST['altura'] >= 0) ) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura;
                echo "<div class='resultado'>Área: " . number_format($area, 2, ',', '.') . "</div>";
            }

            else if (isset($_POST['calc_retangulo']) && ($_POST['base'] < 0) || isset($_POST['calc_retangulo']) && ($_POST['altura'] < 0)) {
                echo "Informe um valor válido";
            }
        ?>
    </div>

</body>
</html>

<!-- Crie um programa que apresente os seguintes links ao usuário com as seguintes opções:
a. Calcular a área de um Círculo;
b. Calcular a área de um Triângulo;
c. Calcular a área de um Quadrado;
d. Calcular a área de um Retângulo; -->