<?php

require_once(__DIR__.'/../../vendor/autoload.php');

use DesignPatterns\FactoryPattern\Bootstrap;
use DesignPatterns\FactoryPattern\PageRenderer;

$page = new PageRenderer(new Bootstrap\Factory());
$page->renderPage();