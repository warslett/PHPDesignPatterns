<?php

use DesignPatterns\AdapterPattern\DateA;
use DesignPatterns\AdapterPattern\DateB;
use DesignPatterns\AdapterPattern\DateBtoAAdapter;

require_once(__DIR__ . '/../../vendor/autoload.php');

echo "\nDate A: \n";
$date1 = new DateA(1387929600);
outputDateA($date1);

echo "Date B: \n";
$date2 = new DateB(5);
outputDateB($date2);

echo "Date B adapted to Date A: \n";
$date3 = new DateBtoAAdapter($date2);
outputDateA($date3);

function outputDateA(DateA $date){
    echo 'Year: ' . $date->getYear() . "\n";
    echo 'Month: ' . $date->getMonth() . "\n";
    echo 'Day: ' . $date->getDay() . "\n\n";
}

function outputDateB(DateB $date){
    echo 'MySQL Date: ' . $date->getMySQLDate() . "\n";
    echo 'Readable Date: ' . $date->getReadableDate() . "\n\n";
}