<?php

define('APP_DIR', __DIR__ . '/');

require_once APP_DIR . 'todo.php';

// Приклад використання
$taskManager = new MyTodo\Todo();


try {
    $taskManager->addTasks('go to gym', 11);
    //$taskManager->deleteTask($taskManager->getTasks()[0]['id']);
    //$taskManager->completeTask($taskManager->getTasks()[3]['id']);

    var_dump($taskManager->getTasks());
} catch (Exception $e) {
    echo $e->getMessage();
}




