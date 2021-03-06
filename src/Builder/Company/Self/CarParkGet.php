<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CarParkResponse;

class CarParkGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Мой автопарк.
     *
     * @return CarParkResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
