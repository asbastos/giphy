<?php

namespace Giphy;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $client;
    private const BASE_URI = 'api.giphy.com/v1/';
    private const API_KEY = 'buQ4hVrs1xy6EySLag5bvnhl64hrsUJI';

    public function __construct()
    {
        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URI,
            'timeout' => 2.0,
            'debug' => true,
            
        ]);
    }

    public function get(string $url): array
    {
        $response = $this->client->request('GET', $url . '&api_key=' . self::API_KEY);
        
        return json_decode($response->getBody(), true);
    }

    public function post(array $body, ?string $url = null): array
    {
        $response = $this->client->request('POST', $url . '&api_key=' . self::API_KEY, $body);
        
        return json_decode($response->getBody(), true);
    }

    public function patch(): array
    {
        $response = $this->client->request('PATCH', '');
        
        return json_decode($response->getBody(), true);
    }

    public function put(): array
    {
        $response = $this->client->request('PUT', '');
        
        return json_decode($response->getBody(), true);
    }

    public function delete(): array
    {
        $response = $this->client->request('DELETE', '');
        
        return json_decode($response->getBody(), true);
    }
}
