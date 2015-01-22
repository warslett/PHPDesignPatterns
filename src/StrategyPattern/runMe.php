<?php

use DesignPatterns\StrategyPattern\Context;
use DesignPatterns\StrategyPattern\MeanStrategy;

require_once(__DIR__ . '/../../vendor/autoload.php');

$strategy = new MeanStrategy();

$context = new Context($strategy);

$context->run();