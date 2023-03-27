<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/broker
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\BrokerPutRequest;
use Cargomart\ApiClient\Entity\Order\Responses\BrokerResponse;

final class BrokerPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Установка брокера на заказ.
     *
     * @return BrokerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(BrokerPutRequest $body): BrokerResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            BrokerResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
