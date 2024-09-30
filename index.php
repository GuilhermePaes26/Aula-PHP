<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao Sistema</h1>
    <a href="./ver.php" rel="noopener noreferrer">Ver dados</a>
    <a href="./cadastrar.php" rel="noopener noreferrer">Cadastrar Dados</a>
    <a href="./consulta.php" rel="noopener noreferrer">Consulta por id</a>
</body>
</html>
