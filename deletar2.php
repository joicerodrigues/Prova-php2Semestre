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

    public function deletarAluno($id) {
        
        // Preparando o comando SQL
        $sql = "DELETE FROM alunos WHERE id = ".$id."";
        
        
        if(mysqli_query($this->conn, $sql)) {
            // Function definition
            function function_alert($message) {
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        
        // Function call
        header("location: deletar.php");
        function_alert("Cadastro deletado com sucesso!");
        

        } else {
            echo("Falha ao deletar" . $sql . mysqli_error($this->conn));
        }    

    }
}

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $deletarCadastro = new DataBaseService();
        $deletarCadastro -> deletarAluno($id);
    };54
    
?>