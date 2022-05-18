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

    //função para alterar aluno
    public function alterarAluno($id, $nome, $ra, $sobrenome) {
        // Preparando o comando SQL
        $sql = "UPDATE `alunos` SET nome='$nome', ra='$ra', sobrenome='$sobrenome'  WHERE id='$id'";
        mysqli_query($this->conn, $sql);
        header("location: ../src/atualiza.php?status=sucess");  
    }
}

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $sobrenome = $_POST['sobrenome'];
        $atualizarCadastro = new DataBaseService();
        $atualizarCadastro -> alterarAluno($id, $nome, $ra, $sobrenome);
    };
    
?>