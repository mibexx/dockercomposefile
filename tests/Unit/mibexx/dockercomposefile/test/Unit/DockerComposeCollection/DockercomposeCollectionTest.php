<?php

namespace mibexx\dockercomposefile\test\Unit\DockerComposeCollection;


use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\SimpleElement;
use mibexx\dockercomposefile\DockerComposeCollection\DockerComposeCollection;
use mibexx\dockercomposefile\DockerComposeCollection\Network\NetworkInterface;
use mibexx\dockercomposefile\DockerComposeCollection\Service\ServiceInterface;
use PHPUnit\Framework\TestCase;

class DockercomposeCollectionTest extends TestCase
{
    public function testInstance()
    {
        $dockerCompose = new DockerComposeCollection();
        $this->assertInstanceOf(SimpleElement::class, $dockerCompose->get('version'));
        $this->assertInstanceOf(CollectionInterface::class, $dockerCompose->get('networks')->getCollection());
        $this->assertInstanceOf(CollectionInterface::class, $dockerCompose->get('services')->getCollection());
    }
}