<?php
    $codigo = $_POST['codigo'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "carros";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    
    $resultadoSelect = mysqli_query($conexao, "DELETE FROM carros WHERE id_car = $codigo");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Carros</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>DADOS DELETADOS</h1>';
    mysqli_close($conexao);
?>