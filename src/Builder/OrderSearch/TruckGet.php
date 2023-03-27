<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-search/truck
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaListResponse;

final class TruckGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка машин и критериев поиска для них по заказам
     *
     * @return OrderSearchCriteriaListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderSearchCriteriaListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderSearchCriteriaListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
