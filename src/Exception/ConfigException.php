<?php

namespace BarsamCapital\ConfigPackage\Exception;

use Exception;

class ConfigException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
