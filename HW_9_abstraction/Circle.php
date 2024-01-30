<?php
declare(strict_types=1);
namespace HW_9_abstraction;

class Circle extends Figure {
    private float $radius;

    public function __construct(float $radius) {
        $this->validatePositiveValue($radius, 'Radius');

        $this->radius = $radius;
    }

    public function area(): float {
        return M_PI * $this->radius * $this->radius;
    }

    public function perimeter(): float {
        return 2 * M_PI * $this->radius;
    }

    public function getArea(): float {
        return $this->area();
    }

    public function getPerimeter(): float {
        return $this->perimeter();
    }

    private function validatePositiveValue(float $value, string $propertyName): void {
        if ($value <= 0) {
            throw new \InvalidArgumentException("$propertyName must be a positive value");
        }
    }
}
