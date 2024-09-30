<meta charset="utf-8">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Carros</h1>
    <?php
        $host = "localhost:3306";
        $user = "root";
        $pass = "";
        $base = "carros";
        $conexao = mysqli_connect($host, $user, $pass, $base);

        if (!$conexao) {
            die("Erro de conexão: " . mysqli_connect_error());
        }

        $resultadoQueryMySQL = mysqli_query($conexao, "SELECT * FROM carros");

        echo "<table><tr><th>Código</th><th>Nome</th><th>Carro</th></tr>";
        while ($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
            echo "<tr><td>" . $escrever['id_car'] . "</td><td>" . $escrever['mont_car'] . "</td><td>" . $escrever['nome_car'] . "</td></tr>";
        }
        echo "</table>";

        mysqli_close($conexao);
    ?>
</body>
</html>
