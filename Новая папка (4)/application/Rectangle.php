<?php


namespace application;

class Rectangle extends Shape
{
    public function __construct($width, $height)
    {
        parent::__construct($width, $height);
    }

    public function area(): float
    {
        return $this->height * $this->width;
    }

    public function display(): string
    {
        return 'Rectangle with width: ' . $this->width . ', height: ' . $this->height . ' and area: ' . $this->area();
    }
}
