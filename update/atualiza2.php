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

    public function alterarAluno( $nome, $ra) {

            // Preparando o comando SQL
            $sql = "UPDATE alunos SET nome='".$nome."', ra=".$ra."  WHERE id=".$id."";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                echo("Cadastro atualizado!");
            } else {
                echo("Falha ao atualizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $atualizarCadastro = new DataBaseService();
        $atualizarCadastro -> alterarAluno($nome, $ra);
    };
    
?>