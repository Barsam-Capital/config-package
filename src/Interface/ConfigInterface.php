<?php

namespace BarsamCapital\ConfigPackage\Interface;

interface ConfigInterface
{
    public static function synchronize(string $serviceName, array $configurations = []);
}
