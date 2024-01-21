<?php declare(strict_types= 1);

namespace Atendimento\Controllers;

use Atendimento\Connection\Database;
use Atendimento\Models\TypesServices;

class TiposAtendimentoController implements Controller
{
    private $routes = [
        "/tipos-atendimentos.php.POST" => "index"
    ];

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db = new Database();
            $typesService = new TypesServices($db);
        
            echo $typesService->getTypesServices();
        } else {
            echo json_encode(
                [
                    'mensagem' => 'Método HTTP não suportado.'
                ]
            );
        }
    }

    public function routes()
    {
        $route = $_SERVER['REQUEST_URI'];
        
        $route = $route . "." . $_SERVER["REQUEST_METHOD"];

        $method = $this->routes[$route];

        if (!$method) {
            $error = [
                'mensagem' => 'Esta rota não existe.',
                'status' => 404,
            ];

            return json_encode($error);
        }

        return $this->$method();
    }
}
