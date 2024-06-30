<?php

namespace BarsamCapital\ConfigPackage\Dto;

class ConfigDto
{
    public $id;
    public $serviceId;
    public $key;
    public $description;
    public $value;
    public $validators;
    public $autoloaded;
    public $createdAt;
    public $updatedAt;

    public function __construct(
        $id,
        $serviceId,
        $key,
        $description,
        $value,
        $validators,
        $autoloaded,
        $createdAt,
        $updatedAt
    ) {
        $this->id = $id;
        $this->serviceId = $serviceId;
        $this->key = $key;
        $this->description = $description;
        $this->value = $value;
        $this->validators = $validators;
        $this->autoloaded = $autoloaded;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}
