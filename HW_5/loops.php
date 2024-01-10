<?php
declare(strict_types=1);


// Task 1
$array = [];

for ($i = 0; $i < 10; $i++) {
    $randomValue = rand(1, 100);
    $array[] = $randomValue;
}

echo "Мій масив: ";
var_dump($array);


// Task 2
$sumElements = 0;

foreach ($array as $value){
    $sumElements += $value;
}
echo "Сума елементів: $sumElements" . PHP_EOL;


// Task 3
$productionElements = 1;

foreach ($array as $value) {
    $productionElements *= $value;
}

echo "Сума елементів: $productionElements" . PHP_EOL;


// Task 4
// Створив масив для тесту ручками
$arrayOfFives = [5,2,5,1,5,1,2,5,2];
$countOfFive = 0;

foreach ($arrayOfFives as $value) {
    if ($value === 5) {
        $countOfFive++;
    }
}

echo "Всього було п'ятірок: $countOfFive" . PHP_EOL;


// Task 5
echo "Тільки ті що діляться Ha 5: " . PHP_EOL;

foreach ($array as $value) {
    if ($value % 3 === 0) {
        echo $value . PHP_EOL;
    }
}