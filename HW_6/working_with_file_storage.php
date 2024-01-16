<?php

declare(strict_types = 1);

function input() {
    $input = fgets(STDIN);
    $date = date('Y-m-d H:i:s');
    $content = "[$date],INPUT TEXT: $input";
    $write = file_put_contents('logs.txt', $content, FILE_APPEND);

    if ($write) {
        return false;
    }
}

input();

function output() {
    $lines = file('logs.txt');
    $lastLine = trim(end($lines));

    echo $lastLine . PHP_EOL;
}

output();