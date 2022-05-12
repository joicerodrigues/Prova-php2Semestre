<?php 
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<div class="container">
    <form action="cadastro2.php" method="post">
        <div class="mb-3">
        <label for="nome" class="form-label"> Nome:</label>
        <input class="form-label" type="text" id="nome" name="nome" placeholder="Digite seu nome"><br><br>
        <label for="ra" class="form-label">ra:</label>
        <input class="form-label" type="text" id="ra" name="ra" maxlength=7 placeholder="Digite seu RA"><br><br>
        <input class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>
