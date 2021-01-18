<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests\fixtures;

use Cargomart\ApiClient\Authentication\AuthenticationInterface;
use Cargomart\ApiClient\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;

class ClientFactory
{
    public static function create(array $responses): Client
    {
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);
        $guzzle = new GuzzleClient(['handler' => $handlerStack]);
        return new Client($guzzle);
    }

    public static function createWithAuth(array $responses, AuthenticationInterface $auth): Client
    {
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);
        $guzzle = new GuzzleClient(['handler' => $handlerStack]);
        return new Client($guzzle, $auth);
    }
}
