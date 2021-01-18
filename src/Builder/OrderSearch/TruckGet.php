<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaListResponse;

class TruckGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка машин и критериев поиска для них по заказам
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
