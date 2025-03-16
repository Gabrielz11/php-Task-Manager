<?php

namespace PhpTaskManager\Controllers;

use PhpTaskManager\Services\TaskService;
use PhpTaskManager\Models\Task;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\Response\JsonResponse;

class TaskController
{
    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function createTask(ServerRequestInterface $request): ResponseInterface
    {
        // Acessando o corpo da requisição
        $body = $request->getBody()->getContents();
        $data = json_decode($body, true);
        // Verificando se os campos obrigatórios estão presentes
        if (empty($data['title']) || empty($data['description'])) {
            return new JsonResponse(['error' => 'Title and description are required'], 400);
        }

        /**
         * Criando uma nova tarefa com o ID gerado
         */
        $task = new Task(uniqid(), $data['title'], $data['description']);

        /**
         * Adicionando a tarefa ao serviço
         */
        $this->taskService->addTask($task);

        /**
         * Retornando uma resposta de sucesso
         */ 
        return new JsonResponse(['message' => 'Task created successfully'], 201);
    }

    public function getTasks(): ResponseInterface
    {
        return new JsonResponse($this->taskService->getTasks(), 200);
    }
}
