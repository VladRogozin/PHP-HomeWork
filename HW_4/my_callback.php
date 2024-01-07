<?php

function myCallback(int $value1, int $value2, ?closure $fuClosure = null): string {
    $result = $value1 + $value2;
    if ($fuClosure instanceof closure){
        return $fuClosure($result);
    }
    return "Without closure: $result";
}

echo myCallback(3, 3, function (int $result): string{
    return "with  closure: $result";
});


echo myCallback(3, 3);