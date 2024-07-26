<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses\PriceLocalItemResponse;

class PriceIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных конкретного элемента справочника цен.
     *
     * @return PriceLocalItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalItemResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalItemResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
