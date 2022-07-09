<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getProperties(): array
    {
        $response = $this->client->request(
            'GET',
            'http://localhost:3000/api/property'
        );

        return $response->toArray();
    }
}



