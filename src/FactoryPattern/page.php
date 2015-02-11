<?php use DesignPatterns\FactoryPattern\ServiceLocator; ?>
<html>
<head>
    <?php echo ServiceLocator::getFactory()->getPageDependancies(); ?>
</head>
<body>
    <div class="container">

        <h1>Factory Pattern Example</h1>

        <h2>Modal Window</h2>
        <?php
        $modal = ServiceLocator::getFactory()->buildModal('myModal');
        $modal->setTitle("My Test Modal");
        $modal->setBody("Lorem Ipsum Blah Blah");

        echo $modal->renderLink('Click Me');
        echo $modal->renderOutput();
        ?>

    </div>
</body>
</html>