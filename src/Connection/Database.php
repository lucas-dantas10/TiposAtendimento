<?php declare(strict_types= 1);

namespace Atendimento\Connection;
use PDO;
use PDOException;

class Database 
{
    private $conn;
    public function __construct()
    {
        $config = require_once 'src/config/app.php';

        try {
            $this->conn = new PDO("{$config['connection']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user={$config["username"]};password={$config["password"]}");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
            exit;
        }
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}

