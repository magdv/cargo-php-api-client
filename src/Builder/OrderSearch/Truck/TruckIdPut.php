<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-search/truck/{truckId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch\Truck;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderSearchUpdateCriteriaRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaResponse;

final class TruckIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание/редактирование критерия поиска машины
     *
     * @return OrderSearchCriteriaResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderSearchUpdateCriteriaRequest $body): OrderSearchCriteriaResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderSearchCriteriaResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
