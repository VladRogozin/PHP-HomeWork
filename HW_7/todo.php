<?php
declare(strict_types=1);

namespace MyTodo;

class Todo {
    public $file = '';

    private StatusEnum $newStatusEnum;
    private $tasks = [];

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->loadTasks();
    }

    public function addTasks(string $taskName, int $priority): void
    {
        $task = [
            'id' => uniqid(),
            'name' => $taskName,
            'priority' => $priority,
            'status' => StatusEnum::NOT_COMPLETED,
        ];

        $this->tasks[] = $task;
        $this->saveTasks();
    }

    public function deleteTask(string $taskId): void
    {
        foreach ($this->tasks as $key => $task) {
            if ($task['id'] === $taskId) {
                unset($this->tasks[$key]);
                $this->saveTasks();
                break;
            }
        }
    }

    public function getTasks(): array
    {
        $sortedTasks = $this->tasks;
        usort($sortedTasks, function ($a, $b) {
            return $b['priority'] - $a['priority'];
        });
        return $sortedTasks;
    }

    public function completeTask(string $taskId): void
    {
        foreach ($this->tasks as &$task) {
            if ($task['id'] === $taskId) {
                $task['status'] = StatusEnum::COMPLETED;
                $this->saveTasks();
                break;
            }
        }
    }

    private function loadTasks(): void
    {
        if (file_exists($this->file)) {
            $data = file_get_contents($this->file);
            $this->tasks = json_decode($data, true);
        }
    }

    private function saveTasks(): void
    {
        file_put_contents($this->file, json_encode($this->tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
