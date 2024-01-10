<?php


declare(strict_types=1);

// Task 1
// Також можна цей варіант: array_fill(0, 15, rand(1,50))
function randArray(int $length, int $min = 1, int $max= 50): array {
    $array = [];
    for ($i = 0; count($array) < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}
$randArray = randArray(10);
var_dump($randArray);


// Task 2
// Також можна цей варіант: min($randArray), max($randArray)
$maxElement = 0;
$minElement = 50;

foreach ($randArray as $value) {
    if ($value > $maxElement) {
        $maxElement = $value;
    } elseif ($value < $minElement) {
        $minElement = $value;
    }
}
echo $minElement . PHP_EOL;
echo $maxElement . PHP_EOL;


// Task 3
// Також можна цей варіант: sort($randArray) або без зміни індексів: asort($randArray)
$lengthMy = count($randArray);
for ($i = 0; $i < $lengthMy - 1; $i++) {
    for ($j = 0; $j < $lengthMy - $i - 1; $j++) {
        if ($randArray[$j] > $randArray[$j + 1]) {
            $box = $randArray[$j];
            $randArray[$j] = $randArray[$j + 1];
            $randArray[$j + 1] = $box;
        }
    }
}

var_dump($randArray);