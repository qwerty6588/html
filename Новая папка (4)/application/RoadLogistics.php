<?php


namespace application;

class RoadLogistics
{
    protected Transport $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

    public function display(): string
    {
        return 'Road Logistics using ' . $this->transport->display();
    }
}
