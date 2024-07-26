<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses\PriceLocalPoolItemResponse;

class PoolIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных конкретного пула направлений и цен.
     *
     * @return PriceLocalPoolItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalPoolItemResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalPoolItemResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
