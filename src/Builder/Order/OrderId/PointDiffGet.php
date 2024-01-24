<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderPointDiffResponse;

class PointDiffGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Дифф между точками маршрута в заказе и справочнике
     *
     * @return OrderPointDiffResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderPointDiffResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderPointDiffResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
