<?php

require_once __DIR__ . '/autoload.php';

use Logistics\DeliveryPlanner;
use Logistics\RoadLogistics;
use Logistics\SeaLogistics;


DeliveryPlanner::planDelivery();


$roadLogistics = new RoadLogistics();
$roadLogistics->createTransport();
var_dump("Fuel Cost for 100 km:", $roadLogistics->calculateFuelCost(100));


$seaLogistics = new SeaLogistics();
$seaLogistics->createTransport();
$seaLogistics->displayPortInfo("Large Port");
