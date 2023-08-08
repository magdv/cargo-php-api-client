<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\PriceLocalPoolEditRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalPoolItemResponse;

class PoolIdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование конкретного пула направлений и цен.
     *
     * @return PriceLocalPoolItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalPoolEditRequest $body): PriceLocalPoolItemResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            PriceLocalPoolItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
