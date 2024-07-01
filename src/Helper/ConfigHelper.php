<?php

namespace BarsamCapital\ConfigPackage\Helper;

class ConfigHelper
{
    private static $config;

    private static function loadConfig()
    {
        if (self::$config === null) {
            self::$config = require(__DIR__ . '/../../config/config.php');
        }
    }

    public static function getConfigByKey(string $key)
    {
        self::loadConfig();
        return self::$config[$key] ?? null;
    }
}
