<?php

namespace DesignPatterns\BuilderPattern;

/**
 * Class Director
 */
class Director {

    /**
     * @param MessageBuilder $builder
     * @return Message
     */
    public function build(MessageBuilder $builder) {
        $builder->setFromAddress();
        $builder->setSubject();
        $builder->setMessage();
        return $builder->getMessage();
    }

}