<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/pin
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderUsersResponse;

final class PinGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список пользователей закрепивших заказ
     *
     * @return OrderUsersResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderUsersResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderUsersResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
