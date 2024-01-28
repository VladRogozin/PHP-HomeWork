<?php

use HW_8_polymorphism\TextPrinter;

class UppercaseTextPrinter extends TextPrinter {
    public function print(): void {
        echo strtoupper($this->text) . PHP_EOL;
    }
}