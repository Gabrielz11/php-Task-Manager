<?php
//respeitando e seguindo o PSR-4 para a estrutura de diretórios e namespaces do PHP e o PSR-12 para a formatação do código
//https://www.php-fig.org/psr/psr-4/
//https://www.php-fig.org/psr/psr-12/

namespace TaskManager\Services;

use TaskManager\Models\Task;

class TaskService
{
    private array $tasks = [];

    public function addTask(Task $task): void
    {
        $this->tasks[ $task->getId() ] = $task;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function getTaskId(string $id): ?Task
    {
        return $this->tasks[ $id ] ?? null;
    }
}