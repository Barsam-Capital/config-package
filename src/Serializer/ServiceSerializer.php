<?php

namespace BarsamCapital\ConfigPackage\Serializer;

use BarsamCapital\ConfigPackage\Dto\ServiceDto;

class ServiceSerializer
{
    public static function toDto(array $document): ServiceDto
    {
        return new ServiceDto(
            (string) $document['_id'],
            $document['name'],
            (bool) $document['enabled'],
            $document['configs'] ?? [],
            $document['created_at'],
            $document['updated_at'],
            $document['synced_at'] ?? null
        );
    }

    public static function toDocument(ServiceDto $service): array
    {
        return [
            '_id' => $service->id,
            'name' => $service->name,
            'enabled' => $service->enabled,
            'configs' => $service->configs,
            'created_at' => $service->createdAt,
            'updated_at' => $service->updatedAt,
            'synced_at' => $service->syncedAt,
        ];
    }
}
