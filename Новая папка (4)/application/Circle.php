<?php

namespace application;

class Circle extends Shape
{
    private float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
        parent::__construct(0, 0);
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function display(): string
    {
        return 'Circle with radius: ' . $this->radius . ' and area: ' . $this->area();
    }
}
