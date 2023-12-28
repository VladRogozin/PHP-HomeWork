<?php

echo "Hello, friend, what's your name?!!" . PHP_EOL;

$getName = trim(fgets(STDIN)); // тут трішки загуглив, щоб видалити перенос \n
echo "Nice to meet you $getName, beautiful name!" . PHP_EOL;

$counter = 0;

echo "Now let's do some numbers $getName" . PHP_EOL;
$counter += (int)fgets(STDIN);
$counter += (int)fgets(STDIN);
$counter += (int)fgets(STDIN);

$mean = $counter / 3;

echo "$getName твоя сумма: $counter" . PHP_EOL . "и твое середне арефметычне: $mean" . PHP_EOL;