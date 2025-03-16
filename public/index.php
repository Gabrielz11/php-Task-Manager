<?php

require '../vendor/autoload.php';

use PhpTaskManager\Controllers\TaskController;
use PhpTaskManager\Services\TaskService;
use Laminas\Diactoros\ServerRequestFactory;

$request = ServerRequestFactory::fromGlobals();

$taskService = new TaskService();

$controller = new TaskController($taskService);

/**
 * Simulação de Request - POST - Aqui estamos criando uma nova tarefa e retornando um JSON com a mensagem de sucesso
 */
if($request->getMethod() == 'POST') {
    $response = $controller->createTask($request);
} else {
    $response = $controller->getTasks();
}

http_response_code($response->getStatusCode());
echo $response->getBody();
