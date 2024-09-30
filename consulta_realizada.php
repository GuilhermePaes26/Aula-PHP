<?php
    $codigo = $_POST['codigo'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "carros";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    
    $resultadoSelect = mysqli_query($conexao, "SELECT * FROM carros WHERE id_car = $codigo");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Carros</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Consulta de Carros</h1>
        <div class="success-message">CONSULTA REALIZADA COM SUCESSO</div>
        <table>
            <tr><th>Código</th><th>Nome</th><th>Carro</th></tr>';
    while ($escrever = mysqli_fetch_array($resultadoSelect)) {
        echo "</td><td>" . $escrever['id_car'] . "</td><td>" . $escrever['mont_car'] . "</td><td>" . $escrever['nome_car'] ."</td></tr>";
    }
    echo "</table>";
    echo "</br></br>";
    mysqli_close($conexao);
?>