<?php 
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
echo '<br><br>';
echo 'Nome: '.$_POST['firstName'];
echo '<br><br>';
echo 'Sobrenome: '.$_POST['lastName'];
?>
</body>
</html>