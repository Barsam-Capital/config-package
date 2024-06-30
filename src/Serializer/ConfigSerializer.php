<?php

namespace BarsamCapital\ConfigPackage\Serializer;

use BarsamCapital\ConfigPackage\Dto\ConfigDto;

class ConfigSerializer
{
    public static function toDto(array $document): ConfigDto
    {
        return new ConfigDto(
            (string) $document['_id'],
            (string) $document['service_id'],
            $document['key'],
            $document['description'],
            $document['value'],
            (bool) $document['autoloaded'],
            $document['validators'] ?? [],
            $document['created_at'],
            $document['updated_at']
        );
    }

    public static function toDocument(ConfigDto $config): array
    {
        return [
            '_id' => $config->id,
            'service_id' => $config->serviceId,
            'key' => $config->key,
            'description' => $config->description,
            'value' => $config->value,
            'autoloaded' => $config->autoloaded,
            'validators' => $config->validators,
            'created_at' => $config->createdAt,
            'updated_at' => $config->updatedAt,
        ];
    }
}
