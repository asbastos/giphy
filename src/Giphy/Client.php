<?php

namespace Giphy;

use GuzzleHttp\Client as GuzzleClient;

class Client {
    private $client;
    private const BASE_URI = 'api.giphy.com/v1';
    private const API_KEY = 'buQ4hVrs1xy6EySLag5bvnhl64hrsUJI'

    public function __construct()
    {
        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URI,
            'timeout' => 2.0,
            'defaults' => [
                'query' => ['api_key' => self::API_KEY],
            ]
        ]);
    }

    public function get(string $url): int
    {
        $response = $this->client->request('GET', $url);
        return $response->getStatusCode();
    }

    public function post(array $body, ?string $url = null): int
    {
        $response = $this->client->request('POST', $url, $body);

        return $response->getStatusCode():
    }

    }

}

