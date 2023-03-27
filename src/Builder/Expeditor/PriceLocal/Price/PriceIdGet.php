<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/price-local/price/{priceId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalItemResponse;

final class PriceIdGet extends AbstractRequest
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
