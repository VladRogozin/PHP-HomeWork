<?php

// Цілі числа
$integer = 20;
$integerInString = '20';

// Рядки
$string1 = "Hello";
$string2 = "World";

// Логічні значення
$bool1 = true;
$bool2 = false;

// Десяткові числа
$float1 = 5.5;
$float2 = 7.5;

echo "Integer Comparison: ";
var_dump($integer === $integerInString);
echo PHP_EOL;

echo "String Comparison: ";
var_dump($string1 === $string2);
echo PHP_EOL;

echo "Boolean Comparison: ";
var_dump($bool1 === $bool2);
echo PHP_EOL;

echo "Float Comparison: ";
var_dump($float1 === $float2);
echo PHP_EOL;

echo "Integer Comparison: ";
var_dump($integer == $integerInString);
echo PHP_EOL;

echo "String Comparison: ";
var_dump($string1 == $string2);
echo PHP_EOL;

echo "Boolean Comparison: ";
var_dump($bool1 == $bool2);
echo PHP_EOL;

echo "Float Comparison: ";
var_dump($float1 == $float2);
echo PHP_EOL;

echo "Integer Comparison: " . (int)$integerInString . " === $integer is ";
var_dump((int)$integerInString === $integer);
echo PHP_EOL;

echo "String Comparison: " . $integer . " === '$string1' is ";
var_dump((string)$integer === $string1);
echo PHP_EOL;
