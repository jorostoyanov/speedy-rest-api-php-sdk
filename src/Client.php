<?php

namespace Speedy;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    /* The base API endpoint */
    const BASE_API_URL = 'https://api.speedy.bg/v1/';

    /**
     * The Speedy config instance.
     *
     * @var \Speedy\Config
     */
    protected $config = null;

    /**
     * The Guzzle client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client = null;

    /**
     * Constructor.
     *
     * @param \Speedy\Config
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->client = new GuzzleClient;
    }

    /**
     * Performs a POST request.
     *
     * @return mixed
     */
    public function post($endpointPath, $params = [])
    {
        $params['json']['userName'] = $this->config->getUsername();
        $params['json']['password'] = $this->config->getPassword();

        return $this->client->request('POST', static::BASE_API_URL . $endpointPath, $params);
    }
}
