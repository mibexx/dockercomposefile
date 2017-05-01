<?php

namespace mibexx\dockercomposefile\DockerComposeCollection;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;
use mibexx\dockercomposefile\DockerComposeCollection\Network\NetworkCollection;
use mibexx\dockercomposefile\DockerComposeCollection\Service\ServiceCollection;
use mibexx\dockercomposefile\DockerComposeCollection\Service\ServiceInterface;

class DockerComposeCollection extends Collection implements CollectionInterface
{

    /**
     * BaseCollection constructor.
     */
    public function __construct($version = 2)
    {
        $this->set('version', new SimpleElement($version));
        $this->set('services', new CollectionElement(new Collection()));
        $this->set('networks', new CollectionElement(new Collection()));
    }

    /**
     * @param $name
     * @param ServiceInterface $service
     */
    public function addService($name, ServiceInterface $service)
    {
        $this->get('services')->getCollection()->set($name, new CollectionElement($service));
    }
}