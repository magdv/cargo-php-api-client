<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\PriceLocalEditRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalListResponse;

class IdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование конкретного направления (цены).
     *
     * @return PriceLocalListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PriceLocalEditRequest $body): PriceLocalListResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            PriceLocalListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
