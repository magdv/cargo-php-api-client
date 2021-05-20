<?php

declare(strict_types=1);

namespace Cargomart\ApiClient;

abstract class AbstractBuilder
{
    protected const URL = '';

    /**
     * @var array
     */
    protected array $params;
    /**
     * @var Client
     */
    protected Client $client;

    public function __construct(array $params, Client $client)
    {
        $this->params = $params;
        $this->client = $client;
    }

    protected function getUrl(): string
    {
        if (empty($this->params)) {
            return static::URL;
        }
        $from = [];
        $to = [];
        foreach ($this->params as $k => $v) {
            $from[] = "{{$k}}";
            $to[] = $v;
        }
        return str_replace($from, $to, static::URL);
    }
}
