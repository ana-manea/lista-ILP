
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora de Área</title>
</head>
<body>
    <header>
        <h1>Calculadora de Área</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="circulo.php">Círculo</a></li>
            <li><a href="triangulo.php">Triângulo</a></li>
            <li><a href="quadrado.php">Quadrado</a></li>
            <li><a href="retangulo.php">Retângulo</a></li>
        </ul>
</nav>
    <div class="conteudo">
        <h1>Calcular área do quadrado</h1>
       <form method="post" action="">
            <label>Lado (l):</label>
            <input type="number" name="lado" required>
            <input type="submit" id="botao" name="calc_quadrado" value="Calcular">
        </form>
        <?php
        if (isset($_POST['calc_quadrado'])) {
            if (!empty($_POST['lado']) && ($_POST['lado'] >= 0)) {
                $lado = $_POST['lado'];
                $area = pow($lado, 2);
                $resultado = number_format($area, 2, ',', '.');
                session_start();
                $_SESSION['resultado'] = $resultado;
                $_SESSION['erro'] = null;
            } else {
                session_start();
                $_SESSION['resultado'] = null;
                $_SESSION['erro'] = "Informe um valor válido.";
            }
            header('Location: quadrado.php');
            exit();
        }

        session_start();
        if (!empty($_SESSION['resultado'])) {
            echo "<div class='resultado'>Área: " . $_SESSION['resultado'] . "</div>";
            $_SESSION['resultado'] = null;
        } elseif (!empty($_SESSION['erro'])) {
            echo "<div class='resultado erro'>" . $_SESSION['erro'] . "</div>";
            $_SESSION['erro'] = null;
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