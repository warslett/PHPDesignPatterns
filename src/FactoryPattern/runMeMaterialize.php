<?php

require_once(__DIR__.'/../../vendor/autoload.php');

use DesignPatterns\FactoryPattern\Materialize;
use DesignPatterns\FactoryPattern\ServiceLocator;

ServiceLocator::setFactory(new Materialize\Factory());

include('page.php');