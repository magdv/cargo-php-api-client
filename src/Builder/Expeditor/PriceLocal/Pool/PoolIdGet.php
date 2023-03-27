<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/price-local/pool/{poolId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalPoolItemResponse;

final class PoolIdGet extends AbstractRequest
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
