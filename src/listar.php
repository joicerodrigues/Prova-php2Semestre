<?php

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

$sql = "SELECT id, nome, ra, sobrenome FROM alunos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align='left' cellspacing=9 cellpadding=9><tr><th>ID</th><th>NOME</th><th>SOBRENOME</th><th>RA</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["sobrenome"]."</td><td>".$row["ra"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>