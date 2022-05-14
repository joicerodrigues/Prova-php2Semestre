<?php
    require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <div class="container pt-5 ps-5">
    <div class="row">
        <div class="col">
    <form action="delete/deletar2.php" method="post">
        <div class="mb-2">
        <label for="nome" class="form-label"> ID:</label>
        <input class="form-control" type="text" id="ID" name="id" placeholder="Digite o ID"><br><br>
        <input class="btn btn-danger" type="submit" value="Deletar">
        </div>
    </form>
</div>
<div class="col">
    <p class="fs-1">Lista de cadastro de alunos</p>
        <?php
        require_once('listar.php')
        ?>
    </div>
</div>
</div>
<?php
require_once('footer.php');
?>