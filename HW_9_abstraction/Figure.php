<?php
declare(strict_types=1);
namespace HW_9_abstraction;

abstract class Figure {
    abstract public function area(): float;

    abstract public function perimeter(): float;
}