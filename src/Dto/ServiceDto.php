<?php

namespace BarsamCapital\ConfigPackage\Dto;

class ServiceDto
{
    public $id;
    public $name;
    public $enabled;
    public $configs;
    public $createdAt;
    public $updatedAt;
    public $syncedAt;

    public function __construct(
        $id,
        $name,
        $enabled,
        $configs,
        $createdAt,
        $updatedAt,
        $syncedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->enabled = $enabled;
        $this->configs = $configs;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->syncedAt = $syncedAt;
    }
}
