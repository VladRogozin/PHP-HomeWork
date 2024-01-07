<?php
declare(strict_types=1);


//Task 1
function calculationPerimeter(int $radius = 0): float{
    $pi = 3.14;
    return $pi * pow($radius, 2);
}
echo calculationPerimeter(2) . PHP_EOL;


//Task 2
function powerNumber(float $base, int $exponent): float|int {
    return $base ** $exponent ;                                //Тут можна і так pow($base, $exponent), але думаю ідея була не в цьому
}
echo powerNumber(2, 3 ) . PHP_EOL;


//Task 3. changes the existing
$Number1 = 4;
function changes(int &$value, int $exponent): void {
    $value = pow($value, $exponent);
}
changes($Number1, 2);
echo $Number1 . PHP_EOL;


//Task 3. return new number
$Number2 = 2;
function returnNew(float &$value, int $exponent): int|float {
    return pow($value, $exponent);
}
echo returnNew($Number2, 2) . PHP_EOL;
