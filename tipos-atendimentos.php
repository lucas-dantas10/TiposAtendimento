<?php declare(strict_types= 1);

use Atendimento\Controllers\TiposAtendimentoController;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$controller = new TiposAtendimentoController();
$controller->routes();
