<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/refuse
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\ReasonRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

final class RefusePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Оформить отказ заказа Экспедитора.
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ReasonRequest $body): OrderCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
