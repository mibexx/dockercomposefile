<?php

namespace mibexx\dockercomposefile;


use mibexx\collection\Collection\CollectionInterface;

class ComposeFile implements FileInterface
{
    private $filename;

    /**
     * ComposeFile constructor.
     * @param $filename
     */
    public function __construct($filename = "")
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return CollectionInterface
     */
    public function read()
    {

    }

    /**
     * @param CollectionInterface $collection
     */
    public function write(CollectionInterface $collection)
    {

    }
}