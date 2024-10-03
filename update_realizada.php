<?php
    $codigo = $_POST['codigo'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "carros";
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $resultadoSelect = mysqli_query($conexao, "SELECT * FROM carros WHERE id_car = $codigo");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar carros</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Alterar</h1>
        <div class="success-message">SELECIONE OS VALORES</div>
        <form method="POST" action="alterar.php">
            <table>
                <tr>
                    <th>Montadora</th>
                    <th>Nome</th>
                </tr>';
    while ($escrever = mysqli_fetch_array($resultadoSelect)) {
        echo "<tr>
                <td><input type='text' name='mont_car' value='" . $escrever['mont_car'] . "' /></td>
                <td><input type='text' name='nome_car' value='" . $escrever['nome_car'] . "' /></td>
                <input type='hidden' name='id_car' value='" . $escrever['id_car'] . "' />
              </tr>";
    }
    echo "</table>";
    echo "<br><br>";
    echo "<input type='submit' value='Alterar'>"; 
    echo "</form>";
    mysqli_close($conexao);
?>
