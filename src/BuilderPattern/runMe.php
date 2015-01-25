<?php

namespace DesignPatterns\BuilderPattern;
require_once(__DIR__.'/../../vendor/autoload.php');

$director = new Director();

$director->build(new AdminMessageBuilder('bob@system.com'))->send();

$director->build(new SellerMessageBuilder('william.a@biffbangpow.com'))->send();

$director->build(new BuyerMessageBuilder('developers@biffbangpow.com'))->send();