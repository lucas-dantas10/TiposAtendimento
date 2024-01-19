<?php declare(strict_types= 1);

use Lucas\Atendimento\Connection\Database;
use Lucas\Atendimento\Models\TypesServices;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
