<?php

namespace DesignPatterns\FactoryPattern\AbstractUI;

/**
 * Interface Modal
 * @package DesignPatterns\FactoryPattern\AbstractUI
 */
interface Modal {

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param string $body
     */
    public function setBody($body);

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     */
    public function setTitle($title);

    /**
     * @param string $id
     */
    public function __construct($id);

    /**
     * @return string
     */
    public function renderOutput();

    /**
     * @param $label
     * @return string
     */
    public function renderLink($label);

}