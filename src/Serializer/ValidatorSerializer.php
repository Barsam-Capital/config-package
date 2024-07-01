<?php

namespace BarsamCapital\ConfigPackage\Serializer;

use BarsamCapital\ConfigPackage\Dto\ValidatorDto;

class ValidatorSerializer
{
    public static function toDTO(array $document): ValidatorDto
    {
        return new ValidatorDto(
            (string) $document['_id'],
            $document['name'],
            $document['params'] ?? []
        );
    }

    public static function toDocument(ValidatorDto $validator): array
    {
        return [
            '_id' => $validator->id,
            'name' => $validator->name,
            'params' => $validator->params,
        ];
    }
}
