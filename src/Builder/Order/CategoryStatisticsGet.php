<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCategoryStatisticsResponse;

class CategoryStatisticsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение статистики заказов по категориям
     *
     * @return OrderCategoryStatisticsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderCategoryStatisticsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderCategoryStatisticsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
