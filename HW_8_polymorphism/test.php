<?php
declare(strict_types=1);
define('APP_DIR', __DIR__ . '/');

require_once APP_DIR . 'TextPrinter.php';
require_once APP_DIR . 'UppercaseTextPrinter.php';



$textPrinter = new HW_8_polymorphism\TextPrinter();
$textPrinter->print();

$uppercaseTextPrinter = new UppercaseTextPrinter();
$uppercaseTextPrinter->print();
