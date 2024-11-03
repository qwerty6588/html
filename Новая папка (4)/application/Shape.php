<?php


namespace application;



class Shape implements ShapeInterface
{
    protected float $width;
    protected float $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return 0.0;
    }

    public function display(): string
    {
        return 'Shape with width: ' . $this->width . ' and height: ' . $this->height;
    }
}
