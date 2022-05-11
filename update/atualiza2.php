


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<?php
/*
print_r($_POST);
*/
$id = $_POST['id'];
$nome = $_POST['nome'];
$ra = $_POST['ra'];
// echo $nome;

// Parâmetros da conexão com o banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cadalunos';
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Preparando o comando SQL

$sql = "UPDATE alunos SET nome='".$nome."' WHERE id=".$id."";
$sql = "UPDATE alunos SET ra=".$ra." WHERE id="$id"";
// echo $sql;
// Executar o comando SQL
if (mysqli_query($conn, $sql)) {
    echo "Cadastro feito com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechar a conexão
mysqli_close($conn);
?>