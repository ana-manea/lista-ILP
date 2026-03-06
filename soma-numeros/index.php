<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Somatório de dígitos</title>
</head>
<body>
    <div class="conteudo">
        <h2>Somar dígitos de um número inteiro</h2>
        <form action="" method="post">
            <label>Digite um número inteiro: </label><br>
            <input type="number" name="numero" id="" required><br>
            <input type="submit" id="botao" name="calcular" value="calcular">
        </form>

        <?php 
        if(isset($_POST['calcular']) && !empty($_POST['numero'])) {
            $digitos = $_POST['numero'];
            $soma = array_sum(str_split((string)$digitos));
            if ($soma != "") {
                echo '<div class = "resultado">';
                echo "O resultado é: " . $soma;
                echo '</div>';

            }
        }
        ?>
    </div>
</body>
</html>



<!-- Desenvolva uma página em PHP que leia um número inteiro qualquer e apresente a soma de todos os seus dígitos. Exemplo: 1234 a soma dos dígitos é 10.-->