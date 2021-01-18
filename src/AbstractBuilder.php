<?php

declare(strict_types=1);

namespace Cargomart\ApiClient;

abstract class AbstractBuilder
{
    /**
     * @var array
     */
    protected $params;
    /**
     * @var Client
     */
    protected $client;

    public function __construct(array $params, Client $client)
    {
        $this->params = $params;
        $this->client = $client;
    }

    protected function getUrl()
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
