<?php
// Classe para conexão com o banco de dados
class BancodeDados {
    private $servername = "localhost"; // Endereço do servidor MySQL
    private $username = "root"; // Nome de usuário do banco de dados
    private $password = ""; // Senha do banco de dados
    private $database = "FlexForceGym"; // Nome do banco de dados
    private $conn;

    // Método para estabelecer a conexão com o banco de dados
    public function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // Verifica se houve erro na conexão
        if ($this->conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

    // Método para fechar a conexão com o banco de dados
    public function close() {
        $this->conn->close();
    }
}

// Aqui você pode executar consultas SQL ou outras operações no banco de dados usando $conn

function CadastrarProfessor(){
    //Função para cadastrar professor no banco de dados com cargo de instrutor
}

function CadastroTreino(){
    //Vincular um treino específico para um cliente/aluno e ter a função de imprimir vinculado a um disposí
    //tivo que imprima em papel estilo Nota Fiscal
}



$database->close();
?>
