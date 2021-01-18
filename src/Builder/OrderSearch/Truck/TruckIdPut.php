<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch\Truck;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderSearchUpdateCriteriaRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaResponse;

class TruckIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание/редактирование критерия поиска машины
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
