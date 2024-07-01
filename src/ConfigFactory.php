<?php

namespace BarsamCapital\ConfigPackage;

use BarsamCapital\ConfigPackage\Helper\ConfigHelper;

class ConfigFactory
{
    public static function create(?string $baseUrl = null): Config
    {
        if ($baseUrl == null) {
            $baseUrl = ConfigHelper::getConfigByKey('base_url');
        }

        return new Config($baseUrl);
    }
}
