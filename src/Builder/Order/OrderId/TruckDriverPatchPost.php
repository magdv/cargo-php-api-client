<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderTruckDriverPatchRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPatchResponse;

class TruckDriverPatchPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание запроса на изменение машины и водителя в заказе.
     *
     * @return OrderPatchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderTruckDriverPatchRequest $body): OrderPatchResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderPatchResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
