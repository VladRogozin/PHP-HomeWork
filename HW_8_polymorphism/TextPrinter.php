<?php

namespace HW_8_polymorphism;

class TextPrinter {
    protected $text = "some text";

    public function print(): void {
        echo ucfirst($this->text) . PHP_EOL;
    }
}

