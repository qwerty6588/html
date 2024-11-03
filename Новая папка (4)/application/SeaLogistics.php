<?php


namespace application;

class SeaLogistics
{
    protected Transport $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

    public function display(): string
    {
        return 'Sea Logistics using ' . $this->transport->display();
    }
}
