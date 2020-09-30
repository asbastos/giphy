<?php

namespace Giphy;

use GuzzleHttp\Client as GuzzleClient;

class Client {
    private $client;
    private const BASE_URI = 'api.giphy.com/v1';

    public function __construct()
    {
        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URI,
            'timeout' => 2.0,
        ]);
    }
}