<?php

declare(strict_types = 1);


function fibonacci(?int $number = null,)  {
    $num = 0;                             // або 1 що б коротш було
    $last_num = 1;
    while ($num < $number) {
        yield $num;
        $num = $last_num + $num;
        $last_num = $num - $last_num;

    }
}

$maxV = 89;
$gener = fibonacci($maxV);

foreach ($gener as $value) {
    echo $value . " " . PHP_EOL;
}
