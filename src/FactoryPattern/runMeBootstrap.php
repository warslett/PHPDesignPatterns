<?php

require_once(__DIR__.'/../../vendor/autoload.php');

use DesignPatterns\FactoryPattern\Bootstrap;
use DesignPatterns\FactoryPattern\ServiceLocator;

ServiceLocator::setFactory(new Bootstrap\Factory());

include('page.php');