<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "carros";
$conexao = mysqli_connect($host, $user, $pass, $base);

$id_car = $_POST['id_car'];
$mont_car = $_POST['mont_car'];
$nome_car = $_POST['nome_car'];

$resultUpdate = mysqli_query($conexao, "UPDATE carros SET mont_car = '$mont_car', nome_car = '$nome_car' WHERE id_car = $id_car");
$resultadoSelect = mysqli_query($conexao,"SELECT * FROM carros WHERE id_car = $id_car");

echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carro Atualizado</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Dados alterados</h1>
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
