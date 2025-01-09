<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\PriceLocal\Requests\PriceLocalPoolCreateRequest;
use Cargomart\ApiClient\Entity\PriceLocal\Responses\PriceLocalPoolItemResponse;

class PoolPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание пула направлений и цен.
     *
     * @return PriceLocalPoolItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalPoolCreateRequest $body): PriceLocalPoolItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PriceLocalPoolItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
