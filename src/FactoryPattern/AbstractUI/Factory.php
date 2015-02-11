<?php

namespace DesignPatterns\FactoryPattern\AbstractUI;


/**
 * Interface Factory
 * @package DesignPatterns\FactoryPattern\AbstractUI
 */
interface Factory {

    /**
     * @param string $id
     * @return Modal
     */
    public function buildModal($id);

    /**
     * @return string
     */
    public function getPageDependancies();

}