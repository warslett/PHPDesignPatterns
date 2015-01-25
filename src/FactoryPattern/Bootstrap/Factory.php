<?php

namespace DesignPatterns\FactoryPattern\Bootstrap;
use DesignPatterns\FactoryPattern\AbstractUI;

/**
 * Class Factory
 * @package DesignPatterns\FactoryPattern\Bootstrap
 */
class Factory implements AbstractUI\Factory {

    /**
     * @param string $id
     * @return Modal
     */
    public function buildModal($id)
    {
        return new Modal($id);
    }

    /**
     * @return string
     */
    public function getPageDependancies()
    {
        return '<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
    }

}