<?php

namespace mibexx\dockercomposefile\test\Unit;

use mibexx\dockercomposefile\ComposeFile;
use PHPUnit\Framework\TestCase;

class ComposeFileTest extends TestCase
{
    public function testSetGetFilename()
    {
        $filename = 'test.yaml';

        $composeFile = new ComposeFile();
        $this->assertEquals("", $composeFile->getFilename());
        $composeFile->setFilename($filename);
        $this->assertEquals($filename, $composeFile->getFilename());
    }
}
