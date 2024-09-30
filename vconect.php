<meta charset ="utf-8">
<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "carros";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    echo "<br>";
    echo "conexao ok";

    mysqli_close($conexao);
    ?>