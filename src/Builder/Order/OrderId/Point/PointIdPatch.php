<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/point/{pointId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Point;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderPointEditRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponse;

final class PointIdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование маршрутной точки
     *
     * @return OrderPointEditResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderPointEditRequest $body): OrderPointEditResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderPointEditResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
