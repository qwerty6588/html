<?php

require 'autoload.php';

use application\Circle;
use application\Rectangle;
use application\Truck;
use application\Ship;
use application\RoadLogistics;
use application\SeaLogistics;

//
//$truck = new Truck('Volvo Truck');
//$roadLogistics = new RoadLogistics($truck);
//var_dump($roadLogistics->display());

//$ship = new Ship('Ocean Liner');
//$seaLogistics = new SeaLogistics($ship);
//var_dump($seaLogistics->display());



$circle = new Circle(50);
var_dump($circle->area(), $circle->display());

$rec = new Rectangle(45.44, 44);
var_dump($rec->area(), $rec->display());