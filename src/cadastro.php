<?php 
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<body>
<div class="container">
    <form action="../create/cadastro2.php" method="post">
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <br><br>
                    <label for="nome" class="form-label"> Nome:</label>
                    <input class="form-control" type="text" id="nome" name="nome" maxlength=50 placeholder="Digite seu nome"required autofocus><br><br>
                    <label for="ra" class="form-label">Sobrenome:</label>
                    <input class="form-control" type="text" id="sobrenome" name="sobrenome" maxlength=60 placeholder="Digite seu sobrenome" required autofocus><br><br>
                    <label for="ra" class="form-label">RA:</label>
                    <input class="form-control" type="text" id="ra" name="ra" maxlength=7 placeholder="Digite seu RA" required autofocus><br><br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
                <div class="col">
                    <img src="../images/cad.png" height="550px" widht="550px">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
require_once('footer.php');
?>
