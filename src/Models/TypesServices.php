<?php declare(strict_types= 1);

namespace Lucas\Atendimento\Models;

use Lucas\Atendimento\Connection\Database;
use PDO;

class TypesServices 
{
    private $conn;
    private $token;
    public function __construct(Database $conn)
    {
        $this->conn = $conn;
        $this->token = $_ENV["SECRET_TOKEN"];
    }

    public function validateKey($key) {
        return $key === $this->token;
    }

    function getTypesServices() {
        
        $keyUser = isset($_POST['token']) ? $_POST['token'] : '';
        if ($this->validateKey($keyUser)) {
            $query = $this->conn->query("SELECT * FROM tb_tipos_atendimento");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $error = [
                'mensagem' => 'Usuário não autorizado a executar a API.',
                'status' => 403,
            ];

            return json_encode($error);
        }
    
        return json_encode($result);
    }
}