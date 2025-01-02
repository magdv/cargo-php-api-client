<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderFixPriceResponse;

class FixPriceGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Зафиксировать цену заказа
     *
     * @return OrderFixPriceResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderFixPriceResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderFixPriceResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
