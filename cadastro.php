<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
    <form action="cadastro2.php" method="post">
        <label for="nome"> Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="ra">ra:</label>
        <input type="text" id="ra" name="ra" maxlength=7><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
