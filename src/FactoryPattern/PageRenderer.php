<?php

namespace DesignPatterns\FactoryPattern;


use DesignPatterns\FactoryPattern\AbstractUI\Factory;

/**
 * Class PageRenderer
 * @package DesignPatterns\FactoryPattern
 */
class PageRenderer {

    /**
     * @var Factory
     */
    private $factory;

    /**
     * @param Factory $f
     */
    public function __construct(Factory $f)
    {
        $this->factory = $f;
    }

    public function renderPage()
    {

        ?>
        <html>
        <head>

            <?php echo $this->factory->getPageDependancies(); ?>

        </head>
        <body>
        <div class="container">
        <h1>Factory Pattern Example</h1>

        <h2>Modal Window</h2>
        <?php
        $modal = $this->factory->buildModal('myModal');
        $modal->setTitle("My Test Modal");
        $modal->setBody("Lorem Ipsum Blah Blah");

        echo $modal->renderLink('Click Me');
        echo $modal->renderOutput();
        ?>

        </div>
        </body>
        </html>
    <?php
    }

}