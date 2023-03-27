<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/offer
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderOfferListResponse;

final class OfferGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * получение списка предложений на заказ.
     *
     * @return OrderOfferListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderOfferListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderOfferListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
