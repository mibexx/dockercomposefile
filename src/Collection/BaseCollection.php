<?php

namespace mibexx\dockercomposefile\Collection;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;
use mibexx\dockercomposefile\Collection\Service\NetworkCollection;
use mibexx\dockercomposefile\Collection\Service\ServiceCollection;
use mibexx\dockercomposefile\Collection\Service\ServiceInterface;

class BaseCollection extends Collection implements CollectionInterface
{

    /**
     * BaseCollection constructor.
     */
    public function __construct($version = 2)
    {
        $this->set('version', new SimpleElement($version));
        $this->set('services', new CollectionElement(new ServiceCollection()));
        $this->set('networks', new CollectionElement(new NetworkCollection()));
    }

    /**
     * @param string $name
     * @param ServiceInterface $service
     */
    public function addService($name, ServiceInterface $service)
    {
        $this->get('services')->getCollection()->set($name, $service);
    }
}