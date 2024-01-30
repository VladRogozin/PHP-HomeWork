<?php
declare(strict_types=1);
define('APP_DIR', __DIR__ . '/');


require_once APP_DIR . 'Figure.php';
require_once APP_DIR . 'Rectangle.php';
require_once APP_DIR . 'Circle.php';




try {
    $rectangle = new HW_9_abstraction\Rectangle(4, 3);
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

try {
    $circle = new HW_9_abstraction\Circle(3);
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

if (isset($rectangle, $circle)) {
    echo "Rectangle:\n";
    echo "Area: {$rectangle->area()}\n";
    echo "Perimeter: {$rectangle->perimeter()}\n";

    echo "\nCircle:\n";
    echo "Area: {$circle->area()}\n";
    echo "Perimeter: {$circle->perimeter()}\n";
}