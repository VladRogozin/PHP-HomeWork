<?php
$value = (int)fgets(STDIN);


$output = match ($value) {
    1 => 'green',
    2 => 'red',
    3 => 'blue',
    4 => 'brown',
    5 => 'violet',
    6 => 'black',
    default => 'white',
};

echo $output . PHP_EOL;
