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

    public function alterarAluno($id, $nome, $ra) {

            // Preparando o comando SQL
        $sql = "UPDATE alunos SET nome='$nome', ra='$ra'  WHERE id=$id";
        $rsp = mysqli_query($this->conn, $sql);
        if($rsp){
             // Function definition
             function function_alert($message) {
                 // Display the alert box 
                 echo "<script>alert('$message');</script>";
             }
             // Function call
             header("location: ../atualiza.php");
             function_alert("Atualizado com sucesso!");
            return true;
        }else{
            return false;
        }
    
    
    }
}

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $atualizarCadastro = new DataBaseService();
        $atualizarCadastro -> alterarAluno($id, $nome, $ra);
    };
    
?>