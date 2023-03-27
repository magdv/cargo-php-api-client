<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/price-type
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPriceTypeResponse;

final class PriceTypeGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Словарь тип цены
     *
     * @return OrderPriceTypeResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPriceTypeResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderPriceTypeResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
