<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/point/{pointId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Point;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponse;

final class PointIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации по кокретной точке
     *
     * @return OrderPointEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPointEditResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderPointEditResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
