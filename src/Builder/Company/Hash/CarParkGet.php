<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CarParkResponse;

class CarParkGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * автопарк перевозчика.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): CarParkResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CarParkResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
