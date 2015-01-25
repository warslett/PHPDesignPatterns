<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 11/02/15
 * Time: 11:35
 */

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