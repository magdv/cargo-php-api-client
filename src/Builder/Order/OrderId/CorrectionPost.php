<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/correction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderCorrectionRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionResponse;

final class CorrectionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание запроса на изменение заказа.
     *
     * @return OrderCorrectionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderCorrectionRequest $body): OrderCorrectionResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCorrectionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
