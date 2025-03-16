<?php
//respeitando e seguindo o PSR-4 para a estrutura de diretórios e namespaces do PHP e o PSR-12 para a formatação do código
//https://www.php-fig.org/psr/psr-4/
//https://www.php-fig.org/psr/psr-12/
namespace TaskManager\Models;

class Task
{
    private string $id;
    private string $title;
    private string $description;
    private bool $completed;

    public function __construct(string $id, string $title, string $description, bool $completed = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function markAsCompleted(): void
    {
        $this->completed = true;
    }
}
