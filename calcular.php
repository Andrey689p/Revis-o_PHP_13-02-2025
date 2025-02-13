<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $dependentes = $_POST['dependentes'];
        $pet = $_POST['pet'];



        $salario_final = $salario + ($dependentes * 150);
        if ($pet === 'sim') {
            $salario_final += 100;
        }

        echo "<div class='alert alert-success mt-4' role='alert'>";
        echo "<strong>Funcionário:</strong> $nome <br>";
        echo "<strong>Salário Base:</strong> R$ $salario <br>";
        echo "<strong>Dependentes:</strong> $dependentes (R$ " . ($dependentes * 150) . ") <br>";
        echo "<strong>Pet:</strong> " . ($pet === 'sim' ? 'Sim' : 'Não') . " (R$ " . ($pet === 'sim' ? 100 : 0) . ") <br>";
        echo "<strong><br>Salário Final:</strong> R$ $salario_final";
        echo "</div>";
    }




    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>