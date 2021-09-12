<?php

namespace Speedy\Nomenclatures;

use Speedy\Client;

class Site_Nomenclature
{
    const COUNTRY_BULGARIA_ID = '100';

    const API_ENDPOINT_PATH = 'location/site';

    /**
     * The client.
     *
     * @var \Speedy\Client
     */
    protected $client = null;

    /**
     * Constructor.
     *
     * @param  \Speedy\Client $client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Search for sites by given name or name partial.
     *
     * @param  string $value
     * @return void
     */
    public function searchByName($value)
    {
        return $this->client->post(static::API_ENDPOINT_PATH, [
            'json' => [
                'countryId' => static::COUNTRY_BULGARIA_ID,
                'name' => $value,
            ]
        ]);
    }
}
