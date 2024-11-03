<?php

use Class\PHP23102024\Cuckoo;
use Class\PHP23102024\Duck;
use Class\PHP23102024\Ostrich;

require 'autoload.php';

$duck = new Duck('Skruch', 'Millioner');
$duck->setColor('Yellow');
var_dump($duck->displayData());

$cuckoo = new Cuckoo('Cuckoo', 'ABBOS');
var_dump($cuckoo->displayData());

$ostrich = new Ostrich('Osrich', 'Abdumajid');
var_dump($ostrich->displayData());