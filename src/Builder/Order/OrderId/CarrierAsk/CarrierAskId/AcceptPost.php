<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/carrier-ask/{carrierAskId}/accept
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk\CarrierAskId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\EmptyObject;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponse;

final class AcceptPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Принятие заказчиком ставки перевозчика по заявке
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EmptyObject $body): OrderCardResponse
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
