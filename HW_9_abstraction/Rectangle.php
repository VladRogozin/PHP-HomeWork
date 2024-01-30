<?php
declare(strict_types=1);
namespace HW_9_abstraction;

class Rectangle extends Figure {
    private float $length;
    private float $width;

    public function __construct(float $length, float $width) {
        $this->validatePositiveValue($length, 'Length');
        $this->validatePositiveValue($width, 'Width');

        $this->length = $length;
        $this->width = $width;
    }

    public function area(): float {
        return $this->length * $this->width;
    }

    public function perimeter(): float {
        return 2 * ($this->length + $this->width);
    }

    public function getArea(): float {
        return $this->area();
    }

    public function getPerimeter(): float {
        return $this->perimeter();
    }

    private function validatePositiveValue(float $value, string $name): void {
        if ($value <= 0) {
            throw new \InvalidArgumentException("$name must be a positive value");
        }
    }
}