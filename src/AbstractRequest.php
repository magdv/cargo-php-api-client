<?php

declare(strict_types=1);

namespace Cargomart\ApiClient;

abstract class AbstractRequest
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $url;

    public function __construct(Client $client, string $url)
    {
        $this->client = $client;
        $this->url = $url;
    }
}
