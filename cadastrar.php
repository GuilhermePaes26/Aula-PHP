<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <form action="valida_cadastro.php" method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o código</td>
                    <td><input size='15px' name='codigo'></td>
                </tr>
                <tr>
                    <td>Informe o nome da montadora</td>
                    <td><input size='15px' name='nome-motadora'></td>
                </tr>
                <tr>
                    <td>Informe o nome do carro</td>
                    <td><input size='15px' name='nome-carro'></td>
                </tr>
                <tr>
                    <td colspan=2><input type="SUBMIT" value='Cadastrar'></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>