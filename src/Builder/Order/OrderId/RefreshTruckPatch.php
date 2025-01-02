<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderTruckResponse;

class RefreshTruckPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновить данные транспортного средства в заказе
     *
     * @return OrderTruckResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderTruckResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderTruckResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
