<?php

namespace DesignPatterns\FactoryPattern\Materialize;
use DesignPatterns\FactoryPattern\AbstractUI;

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
        return '<link type="text/css" rel="stylesheet" href="Materialize/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="Materialize/materialize.min.js"></script>';
    }
}