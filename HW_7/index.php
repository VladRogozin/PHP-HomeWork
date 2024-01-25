<?php

define('APP_DIR', __DIR__ . '/');

require_once APP_DIR . 'todo.php';
require_once 'todoDone.php';

// Приклад використання
$taskManager = new MyTodo\Todo('todo_data.json');


try {
    $taskManager->addTasks('go to gym', 11);
//    $taskManager->deleteTask($taskManager->getTasks()[0]['id']);
//    $taskManager->completeTask($taskManager->getTasks()[1]['id']);

    var_dump($taskManager->getTasks());
} catch (Exception $e) {
    echo $e->getMessage();
}




