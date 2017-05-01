<?php

namespace mibexx\dockercomposefile\DockerComposeCollection\Service;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;

class ServiceCollection extends Collection implements ServiceInterface
{

    /**
     * ServiceCollection constructor.
     */
    public function __construct()
    {
        $this->set('build', new CollectionElement(new BuildCollection()));
        $this->set('image', new SimpleElement());
    }
}