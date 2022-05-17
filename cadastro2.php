<?php

class DataBaseService {
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'cadalunos';

    //função para conexão
    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if(!$this->conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }
    }

    //função para destruir conexão
    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    //validação de ra
    private function validar_ra($ra) {
        if ($ra < 7) {
            echo("O RA precisa possuir 7 dígitos");
            return false;
        }
    }

    public function adicionarAluno( $nome, $ra) {

            // Preparando o comando SQL
            $sql = "INSERT INTO alunos ( `nome`, `ra`) ";
            $sql = $sql."VALUES ('".$nome."', ".$ra.")";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                header("location: cadastro.php");
            } else {
                echo("Falha ao realizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $realizarCadastro = new DataBaseService();
        $realizarCadastro -> adicionarAluno($nome, $ra);
    };
    
?>