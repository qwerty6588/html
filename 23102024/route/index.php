<?php

use Class\Database\Database;

require 'autoload.php';  // do not forget to autoload file!!!

$db = new Database();
$countries = $db->select('countries', ['id', 'name', 'iso3', 'emoji'])
    ->where(['iso3', '=', '\'USA\''])
    ->get();
var_dump($countries);
die();

