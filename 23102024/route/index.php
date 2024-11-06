<?php

use Class\Database\Database;

require 'autoload.php';  // do not forget to autoload file!!!
//$duck = new Duck('Skruch', 'Millioner');
//$duck->setColor('Yellow');
//var_dump($duck->displayData());

//$cuckoo = new Cuckoo('Cuckoo', 'ABBOS');
//var_dump($cuckoo->displayData());

$db = new Database();
var_dump($db->select("select * from countries where iso3 = 'USA'"));

