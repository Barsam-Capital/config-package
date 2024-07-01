<?php

namespace BarsamCapital\ConfigPackage\Dto;

class ValidatorDto
{
    public $id;
    public $name;
    public $params;

    public function __construct($id, $name, $params)
    {
        $this->id = $id;
        $this->name = $name;
        $this->params = $params;
    }
}
