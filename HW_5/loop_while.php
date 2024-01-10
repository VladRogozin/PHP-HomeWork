<?php

declare(strict_types=1);

// Task 1
$count = 1;
while ($count <= 10) {
    echo $count . PHP_EOL;
    $count++;
}

// Task 2
// Не дуже зрозумів треба було тільки онлі 5, або від 1 до 5 тому зробив обидва варіанти :
$numberMy = 5;
$factorialMy = 1;
$it = 1;

while ($it <= $numberMy) {
    $factorialMy *= $it;
    $it++;
}

echo "Варіант першій: $factorialMy" .PHP_EOL;


$startPosition = 1;
$countMy = 1;
echo "Варіант Другий:" . PHP_EOL;
while ($countMy <= 5) {
    $countInLoop = 1;
    foreach (range($startPosition, $countMy) as $value) {
        $countInLoop *= $value;
    }
    $countMy++;
    echo $countInLoop .PHP_EOL;
}

// Task 3
echo "Усі парні:" . PHP_EOL;
$arr = range(1, 20);

foreach ($arr as $value) {
    if ($value % 2 === 0) {
        echo $value . PHP_EOL;
    }
}