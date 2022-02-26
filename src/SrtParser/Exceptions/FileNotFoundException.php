<?php

namespace Go0seDev\SrtParser\Exceptions;

class FileNotFoundException extends \Exception
{
    public function __construct($file_location)
    {
        parent::__construct("Could not find file: " . $file_location);
    }
}
