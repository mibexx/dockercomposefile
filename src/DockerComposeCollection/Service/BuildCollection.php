<?php

namespace mibexx\dockercomposefile\DockerComposeCollection\Service;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;

class BuildCollection extends Collection implements ServiceInterface
{

    /**
     * ServiceCollection constructor.
     */
    public function __construct($dockerfile = "")
    {
        $this->set('context', new SimpleElement());
        $this->set('dockerfile', new SimpleElement($dockerfile));
        $this->set('args', new CollectionElement(new Collection()));
    }
}