<?php

namespace mibexx\dockercomposefile;

use mibexx\collection\Collection\CollectionInterface;

interface FileInterface
{
    /**
     * @return string
     */
    public function getFilename();

    /**
     * @param string $filename
     */
    public function setFilename(string $filename);

    /**
     * @return CollectionInterface
     */
    public function read();

    /**
     * @param CollectionInterface $collection
     */
    public function write(CollectionInterface $collection);
}