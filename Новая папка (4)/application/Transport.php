<?php


namespace application;


class Transport implements TransportInterface
{
    private string $name;
    private string $mode;

    public function __construct($name, $mode)
    {
        $this->name = $name;
        $this->mode = $mode;
    }

    public function transportType(): string
    {
        return $this->mode;
    }

    public function display(): string
    {
        return 'Transport Name: ' . $this->name . ', Mode: ' . $this->mode;
    }

    public function area(): float
    {
        // TODO: Implement area() method.
        return 0.0;
    }
}

class Truck extends Transport
{
    public function __construct($name)
    {
        parent::__construct($name, 'Road');
    }

    public function display(): string
    {
        return parent::display() . ', Type: Truck';
    }
}

class Ship extends Transport
{
    public function __construct($name)
    {
        parent::__construct($name, 'Sea');
    }

    public function display(): string
    {
        return parent::display() . ', Type: Ship';
    }
}
