<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/bid
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\BidListResponse;

final class BidGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * получение списка ставок на заказ.
     *
     * @return BidListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BidListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BidListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
