<?php

namespace mibexx\dockercomposefile\test\Integration;


use mibexx\collection\Parser\ArrayParser;
use mibexx\dockercomposefile\DockerComposeCollection\DockerComposeCollection;
use mibexx\dockercomposefile\DockerComposeCollection\Service\ServiceCollection;
use PHPUnit\Framework\TestCase;

class DockerComposeCollectionTest extends TestCase
{
    public function testNewDockerComposeCollection()
    {
        $collection = new DockerComposeCollection();

        $service = new ServiceCollection();
        $service->get('image')->set("test");

        $collection->addService('test', $service);

        $parser = new ArrayParser();
        $emptyComposeFile = $parser->convertToArray($collection);

        $this->assertEquals("", $emptyComposeFile['services']['test']['build']['dockerfile']);
        $this->assertEquals("test", $emptyComposeFile['services']['test']['image']);
    }
}