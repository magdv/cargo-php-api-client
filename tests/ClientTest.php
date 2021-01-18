<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests;

use Cargomart\ApiClient\Exceptions\HttpClientError;
use Cargomart\ApiClient\Exceptions\JsonEncodeDecodeError;
use Cargomart\ApiClient\Tests\fixtures\ClientFactory;
use Cargomart\ApiClient\Tests\fixtures\Responses;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testDoRequest(): void
    {
        $client = ClientFactory::create([
            Responses::localityResponse(),
        ]);

        $rsp = $client->apiV2()->locality()->get()->qQuery('Москва')->do();

        self::assertEquals('Москва', $rsp->data->locality[0]->name);
    }

    public function test500Error(): void
    {
        $client = ClientFactory::create([
            Responses::json500Error(),
        ]);

        $rsp = $client->apiV2()->locality()->get()->qQuery('Москва')->do();

        self::assertTrue($rsp->status->isServerError());
    }

    public function test504DecodeError(): void
    {
        $client = ClientFactory::create([
            Responses::internal504Error(),
        ]);

        $this->expectException(JsonEncodeDecodeError::class);
        $client->apiV2()->locality()->get()->qQuery('Москва')->do();
    }

    public function testCommunicationError(): void
    {
        $client = ClientFactory::create([
            Responses::communicationError(),
        ]);

        $this->expectException(HttpClientError::class);
        $client->apiV2()->locality()->get()->qQuery('Москва')->do();
    }

    public function test401Error(): void
    {
        $client = ClientFactory::create([
            Responses::unauthorizedError(),
        ]);

        $rsp = $client->apiV2()->locality()->get()->qQuery('Москва')->do();

        self::assertTrue($rsp->status->isRequestError());
    }
}
