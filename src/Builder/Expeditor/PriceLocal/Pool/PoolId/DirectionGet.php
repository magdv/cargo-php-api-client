<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalDirectionListResponse;

class DirectionGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка направлений данного пула.
     *
     * @return PriceLocalDirectionListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalDirectionListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalDirectionListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
