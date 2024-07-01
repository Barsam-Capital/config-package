<?php

namespace BarsamCapital\ConfigPackage;

use BarsamCapital\ConfigPackage\Exception\ConfigException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Config
{
    private string $baseUrl;
    private Client $httpClient;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
        $this->httpClient = new Client();
    }

    public function synchronize(string $serviceName, array $configurations = []): bool
    {
        $url = $this->baseUrl . "/synchronize";

        try {
            $this->httpClient->post($url, [
                'json' => [
                    'service_name' => $serviceName,
                    'configurations' => $configurations
                ]
            ]);
            return true;
        } catch (RequestException $e) {
            throw new ConfigException(
                "Synchronization failed: " . $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
    }
}
